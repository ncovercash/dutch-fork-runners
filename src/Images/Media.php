<?php

namespace DutchForkRunners\Images;

/**
 * Represents an image on the filesystem
 */
class Media {
  /**
   * The image's folder
   * @var string
   */
  protected $folder;
  /**
   * The parent's file token
   * @var string
   */
  protected $fileToken;
  /**
   * Path to the image, either a shortened path or null
   * @var string|null
   */
  protected $path;
  /**
   * If the media is a video or image
   * @var bool
   */
  protected $isVideo;
  /**
   * Image caption, optional
   * @var string
   */
  protected $caption;

  /**
   * Maximum size an image can be if it is pixel art
   *
   * _before any pixel artists yell at me_, I am NOT transforming the image
   * This is used to change browser rendering so it doesn't antialias
   */
  public const PIXEL_ART_MAX_SIZE = 150;

  /**
   * Lenth of token used for midsection
   *
   * Changing this will require updating max length in database
   */
  public const FILE_DISTINGUISHER_LENGTH = 10;

  /**
   * Create a new object to represent an image
   *
   * @param string $folder Folder in which the image is contained
   * @param string $fileToken The parent object's file token
   * @param string|null $path The path to the image, or null if default
   * @param bool $isVideo
   * @param string $caption
   */
  public function __construct(string $folder, string $fileToken, ?string $path, bool $isVideo = false, string $caption = "") {
    if ($path == "default.png") {
      $path = null; // BC
    }
    $this->setFolder($folder);
    $this->setFileToken($fileToken);
    $this->setPath($path);
    $this->setIsVideo($isVideo);
    $this->setCaption($caption);
  }

  /**
   * @return string
   */
  public function getFolder(): string {
    return $this->folder;
  }

  /**
   * @param string $folder
   */
  public function setFolder(string $folder): void {
    $this->folder = $folder;
  }

  /**
   * @return string
   */
  public function getFileToken(): string {
    return $this->fileToken;
  }

  /**
   * @param string $fileToken
   */
  public function setFileToken(string $fileToken): void {
    $this->fileToken = $fileToken;
  }

  /**
   * @return string|null
   */
  public function getPath(): ?string {
    return $this->path;
  }

  /**
   * @param string|null $path
   */
  public function setPath(?string $path): void {
    $this->path = $path;
  }

  /**
   * @return bool
   */
  public function isVideo(): bool {
    return $this->isVideo;
  }

  /**
   * @param bool $isVideo
   */
  public function setIsVideo(bool $isVideo): void {
    $this->isVideo = $isVideo;
  }

  /**
   * @return string
   */
  public function getCaption(): string {
    return $this->caption;
  }

  /**
   * @param string $caption
   */
  public function setCaption(string $caption): void {
    $this->caption = $caption;
  }

  /**
   * If the image is a default image
   *
   * @return bool
   */
  public function isDefault(): bool {
    return is_null($this->getPath());
  }

  /**
   * Get the path to the image.  Uses ROOTDIR, not REAL_ROOTDIR
   *
   * @return string Path to the image
   */
  public function getFullPath(): string {
    if ($this->getFilesystemPath() == $this->getNotFoundFilesystemPath()) {
      return $this->getNotFoundPath(); // NF note
    }
    if (is_null($this->getPath())) {
      return ROOTDIR . $this->getFolder() . "/" . "default.png";
    } else {
      return ROOTDIR . $this->getFolder() . "/" . $this->getFileToken() . $this->getPath();
    }
  }

  /**
   * Get the filesystem's path to the image (REAL_ROOTDIR, not ROOTDIR)
   *
   * @return string FS path to the image
   */
  public function getFilesystemPath(): string {
    if (is_null($this->getPath())) {
      $path = REAL_ROOTDIR . $this->getFolder() . "/" . "default.png";
    } else {
      $path = REAL_ROOTDIR . $this->getFolder() . "/" . $this->getFileToken() . $this->getPath();
    }

    // prevent warnings
    if (file_exists($path)) {
      return $path;
    } else {
      return $this->getNotFoundFilesystemPath();
    }
  }

  /**
   * Get the path to the image not found notice
   *
   * @return string
   */
  public static function getNotFoundPath(): string {
    return ROOTDIR . 'img/not_found.png';
  }

  /**
   * Get the FS path to the image not found notice
   *
   * @return string
   */
  public static function getNotFoundFilesystemPath(): string {
    return REAL_ROOTDIR . 'img/not_found.png';
  }

  /**
   * Get the image's HTML as a strict circle
   *
   * @param string[] $additionalClasses Classes to add to the div
   * @param string[] $additionalStyles Styles to add to the div
   * @param string[] $additionalAttributes Attributes to add to the div
   * @return string HTML div.img-strict-circle representing the image
   */
  public function getStrictCircleHtml(array $additionalClasses = [], array $additionalStyles = [], array $additionalAttributes = []): string {
    $str = '';
    $str .= '<div';
    $str .= ' class="img-strict-circle';
    foreach ($additionalClasses as $class) {
      $str .= " " . htmlspecialchars($class);
    }
    $str .= '"';
    $str .= ' style="';
    foreach ($additionalStyles as $key => $value) {
      $str .= htmlspecialchars($key) . ":" . htmlspecialchars($value) . ";";
    }
    $str .= 'background-image: url(' . htmlspecialchars(json_encode($this->getFullPath())) . ');';
    $str .= '"';
    foreach ($additionalAttributes as $key => $value) {
      $str .= ' ' . htmlspecialchars($key) . '="' . htmlspecialchars($value) . '"';
    }
    $str .= '></div>';
    return $str;
  }

  /**
   * Get the image as a <img> element
   *
   * @param string[] $additionalClasses Classes to add to the tag
   * @return string HTML img representing the image
   */
  public function getImgElementHtml(array $additionalClasses = []): string {
    if ($this->isVideo()) {
      $str = '';
      $str .= '<video class="col s12 responsive-video" muted autoplay loop>';
      $str .= '<source src="' . htmlspecialchars($this->getFullPath()) . '">';
      $str .= '</video>';
      return $str;
    }
    $str = '';
    $str .= '<img';
    if (count($additionalClasses)) {
      $str .= ' class="' . htmlspecialchars(implode(" ", $additionalClasses)) . '"';
    }
    $str .= ' src="' . htmlspecialchars($this->getFullPath()) . '"';
    $str .= ' />';
    return $str;
  }

  /**
   * Render an image card with given parameters
   *
   * Makes use of getCardFromRawHtml
   *
   * @param string $title Card title
   * @param string|null $caption Card caption, will use getCaption() if null
   * @param bool $link If the card should link to something
   * @param null|string $linkPath What the card should link to, null if image, no effect if $link=false
   * @param array $ribbon Ribbon color and text, as [hex, text]
   * @return string the card html
   */
  public function getCard(string $title = "", ?string $caption = null, bool $link = false, ?string $linkPath = null, array $ribbon = []): string {
    $html = '';

    if (is_null($caption)) {
      $caption = $this->getCaption();
    }

    if (!empty($title)) {
      $html .= '<p';
      $html .= ' class="card-title"';
      $html .= '>';

      $html .= htmlspecialchars($title);

      $html .= '</p>';
    }

    if (!empty($caption)) {
      $html .= '<p';
      $html .= ' class="raw-inline-markdown"';
      $html .= '>';

      $html .= htmlspecialchars($caption);

      $html .= '</p>';
    }

    $ribbonHtml = '';
    if (count($ribbon) == 2) {
      $ribbonHtml .= '<div';
      $ribbonHtml .= ' class="ribbon"';
      $ribbonHtml .= ' style="background-color: #' . $ribbon[0] . '"';
      $ribbonHtml .= '>';
      $ribbonHtml .= htmlspecialchars($ribbon[1]);
      $ribbonHtml .= '</div>';
    }

    return $this->getCardFromRawHtml($html, $link, $linkPath, $ribbonHtml);
  }

  /**
   * Render an image card with raw HTML
   *
   * @param string $html HTML to use for the card
   * @param bool $link If the card should be a link or not
   * @param string|null $linkPath Null if the card should link to the image (default), or a link to link to
   * @return string Card html
   */
  public function getCardFromRawHtml(string $html, bool $link = false, ?string $linkPath = null, string $preHtml = ""): string {
    $str = '';

    if ($link) {
      $str .= '<a';
      if (is_null($linkPath)) {
        $str .= ' target="_blank"';
        $str .= ' href="' . htmlspecialchars($this->getFullPath()) . '"';
      } else {
        $str .= ' href="' . htmlspecialchars($linkPath) . '"';
      }
    } else {
      $str .= '<div';
    }
    $str .= ' class="col s12 card hoverable"';
    $str .= '>';

    $str .= $preHtml;

    $str .= '<div';
    $str .= ' class="card-image"';
    $str .= '>';

    $str .= $this->getImgElementHtml(["z-depth-2"]);

    $str .= '</div>';

    if (!empty(trim($html))) {
      $str .= '<div class="card-content black-text">';
      $str .= $html;
      $str .= '</div>';
    }

    if ($link) {
      $str .= '</a>';
    } else {
      $str .= '</div>';
    }

    return $str;
  }
}

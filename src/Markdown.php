<?php

namespace DutchForkRunners;

use \League\CommonMark\Environment\Environment;
use \League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension;
use \League\CommonMark\Extension\CommonMark\Node\Block\ListBlock;
use \League\CommonMark\Extension\DefaultAttributes\DefaultAttributesExtension;
use \League\CommonMark\Extension\GithubFlavoredMarkdownExtension;
use \League\CommonMark\Extension\SmartPunct\SmartPunctExtension;
use \League\CommonMark\MarkdownConverter;
use \League\CommonMark\Node\Block\Paragraph;

class Markdown {
  private static $converter = null;

  public static function convert(string $contents) {
    if (self::$converter === null) {
      $config = [
        'default_attributes' => [
          Paragraph::class => [
            'class' => ['flow-text'],
          ],
          ListBlock::class => [
            'class' => ['browser-default'],
          ]
        ],
      ];

      $environment = new Environment($config);
      $environment->addExtension(new CommonMarkCoreExtension());
      $environment->addExtension(new GithubFlavoredMarkdownExtension());
      $environment->addExtension(new DefaultAttributesExtension());
      $environment->addExtension(new SmartPunctExtension());

      self::$converter = new MarkdownConverter($environment);
    }

    return self::$converter->convertToHtml($contents)->getContent();
  }
}

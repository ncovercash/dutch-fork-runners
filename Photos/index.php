<?php

define("ROOTDIR", "../");
define("REAL_ROOTDIR", "../");

require_once REAL_ROOTDIR . "src/initializer.php";
use \DutchForkRunners\Page\{UniversalFunctions, Values};

define("PAGE_KEYWORD", "photos");
define("PAGE_TITLE", "Photos");

require_once Values::HEAD_INC;

echo UniversalFunctions::createHeading("Photos");
?>
<div class="row">
  <div class="col s12">
    <div class="center-on-small-only col s12 m6">
      <h4 class="header">Flickr</h4>
      <p class="flow-text">Click <a href="//flickr.com/photos/dutchforkrunners/albums/with/72157673078101855">here</a>
        to go to our Flickr</p>
    </div>

    <div class="col s12 m6">
      <div id="flickrembed"></div>
    </div>
    <script
      src="https://flickrembed.com/embed_v2.js.php?source=flickr&layout=responsive&input=72157673078101855&sort=4&by=album&theme=grid&scale=fill&skin=default&id=57c3a720e0844"
      async="async" defer="defe"></script>
  </div>
</div>
<div class="divider"></div>
<div class="section row">
  <div class="col s12">
    <h4 class="header">Video Archive</h4>
    <p class="flow-text">Some videos will ask you for a password - the password is <b>run</b></p>
  </div>

  <div class="row">
    <div class="col s12 m6 l8">
      <p class="flow-text no-bottom-margin">Roland Hakes, 2011 4A State Champion</p>
      <p class="no-top-margin">Congratulations Roland Hakes, winning his second Cross Country State Championship! Roland
        set yet another DF 5K record with a 15:10 time, equaling the State Championship course record, 4th best in State
        4A history, finishing his Cross Country career as the fastest 5K runner in DF History!</p>
    </div>
    <div class="col s12 m6 l4">
      <img class="materialboxed col s12" src="../img/Hakes2011.jpg" />
    </div>
    <div class="col s12 m6 l8">
      <p class="flow-text no-bottom-margin">Roland Hakes, 2010 4A State Champion</p>
      <p class="no-top-margin">Congratulations to State Champion Roland Hakes for setting the new DF 5K record with a
        15:34 time.</p>
    </div>
    <div class="col s12 m6 l4">
      <img class="materialboxed col s12" src="../img/Hakes2010.jpg" />
    </div>

    <div id="vimeo-area-311" class="vimeo-area">
      <div class="col s12 m6 l8">
        <p class="flow-text">Roland Hakes - State Champion Video</p>
        <p>by Coach Lindler, 4:25 minutes</p>
      </div>
      <div id="vimeo-player-311" class="vimeo-player col s12 m6 l4">
        <object class="col s12">
          <param name="allowfullscreen" value="true" />
          <param name="allowscriptaccess" value="always" />
          <param name="movie"
            value="https://vimeo.com/moogaloop.swf?clip_id=17023745&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=&amp;fullscreen=1" />
          <embed
            src="https://vimeo.com/moogaloop.swf?clip_id=17023745&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=&amp;fullscreen=1"
            type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always"></embed>
        </object>
      </div>
    </div>

    <div id="vimeo-area-312" class="vimeo-area">
      <div class="col s12 m6 l8">
        <p class="flow-text">2010 App State Memories</p>
        <p>by Michael Bradley, 3:45 minutes</p>
      </div>
      <div id="vimeo-player-312" class="vimeo-player col s12 m6 l4">
        <object class="col s12">
          <param name="allowfullscreen" value="true" />
          <param name="allowscriptaccess" value="always" />
          <param name="movie"
            value="https://vimeo.com/moogaloop.swf?clip_id=17025546&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=&amp;fullscreen=1" />
          <embed
            src="https://vimeo.com/moogaloop.swf?clip_id=17025546&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=&amp;fullscreen=1"
            type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always"></embed>
        </object>
      </div>
    </div>

    <div id="vimeo-area-313" class="vimeo-area">
      <div class="col s12 m6 l8">
        <p class="flow-text">2010 Slide Show</p>
        <p>by Michael Bradley and Amelia Syfert, 14:30 minutes </p>
      </div>
      <div id="vimeo-player-313" class="vimeo-player col s12 m6 l4">
        <object class="col s12">
          <param name="allowfullscreen" value="true" />
          <param name="allowscriptaccess" value="always" />
          <param name="movie"
            value="https://vimeo.com/moogaloop.swf?clip_id=17030213&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=&amp;fullscreen=1" />
          <embed
            src="https://vimeo.com/moogaloop.swf?clip_id=17030213&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=&amp;fullscreen=1"
            type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always"></embed>
        </object>
      </div>
    </div>

    <div id="vimeo-area-244" class="vimeo-area">
      <div class="col s12 m6 l8">
        <p class="flow-text">700 JV runners @ Coaches Classic</p>
      </div>
      <div id="vimeo-player-244" class="vimeo-player col s12 m6 l4">
        <object class="col s12">
          <param name="allowfullscreen" value="true" />
          <param name="allowscriptaccess" value="always" />
          <param name="movie"
            value="https://vimeo.com/moogaloop.swf?clip_id=14900033&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=&amp;fullscreen=1" />
          <embed
            src="https://vimeo.com/moogaloop.swf?clip_id=14900033&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=&amp;fullscreen=1"
            type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always"></embed>
        </object>
      </div>
    </div>

    <div id="vimeo-area-96" class="vimeo-area">
      <div class="col s12 m6 l8">
        <p class="flow-text">Frisbee Pump Up</p>
        <p>Collin leads "Foxes on 3" before the Frisbee Championship</p>
      </div>
      <div id="vimeo-player-96" class="vimeo-player col s12 m6 l4">
        <object class="col s12">
          <param name="allowfullscreen" value="true" />
          <param name="allowscriptaccess" value="always" />
          <param name="movie"
            value="https://vimeo.com/moogaloop.swf?clip_id=13574588&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=&amp;fullscreen=1" />
          <embed
            src="https://vimeo.com/moogaloop.swf?clip_id=13574588&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=&amp;fullscreen=1"
            type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always"></embed>
        </object>
      </div>
    </div>

    <div id="vimeo-area-90" class="vimeo-area">
      <div class="col s12 m6 l8">
        <p class="flow-text">Lip Sync practice</p>
        <p>Zac and BK "practice" for lip sync contest</p>
      </div>
      <div id="vimeo-player-90" class="vimeo-player col s12 m6 l4">
        <object class="col s12">
          <param name="allowfullscreen" value="true" />
          <param name="allowscriptaccess" value="always" />
          <param name="movie"
            value="https://vimeo.com/moogaloop.swf?clip_id=13575173&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=&amp;fullscreen=1" />
          <embed
            src="https://vimeo.com/moogaloop.swf?clip_id=13575173&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=&amp;fullscreen=1"
            type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always"></embed>
        </object>
      </div>
    </div>

    <div id="vimeo-area-91" class="vimeo-area">
      <div class="col s12 m6 l8">
        <p class="flow-text">Lip Sync practice - the guys</p>
        <p>The guys practice for lip-sync. At least we won the Frisbee Competition!</p>
      </div>
      <div id="vimeo-player-91" class="vimeo-player col s12 m6 l4">
        <object class="col s12">
          <param name="allowfullscreen" value="true" />
          <param name="allowscriptaccess" value="always" />
          <param name="movie"
            value="https://vimeo.com/moogaloop.swf?clip_id=13575505&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=&amp;fullscreen=1" />
          <embed
            src="https://vimeo.com/moogaloop.swf?clip_id=13575505&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=&amp;fullscreen=1"
            type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always"></embed>
        </object>
      </div>
    </div>

    <div id="vimeo-area-92" class="vimeo-area">
      <div class="col s12 m6 l8">
        <p class="flow-text">Excited about eating</p>
        <p>They seem a little TOO excited about eating.</p>
      </div>
      <div id="vimeo-player-92" class="vimeo-player col s12 m6 l4">
        <object class="col s12">
          <param name="allowfullscreen" value="true" />
          <param name="allowscriptaccess" value="always" />
          <param name="movie"
            value="https://vimeo.com/moogaloop.swf?clip_id=13574815&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=&amp;fullscreen=1" />
          <embed
            src="https://vimeo.com/moogaloop.swf?clip_id=13574815&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=&amp;fullscreen=1"
            type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always"></embed>
        </object>
      </div>
    </div>

    <div id="vimeo-area-100" class="vimeo-area">
      <div class="col s12 m6 l8">
        <p class="flow-text">Lip Sync Complete</p>
        <p>Here's the whole segment of our team at the lip sync contest.</p>
      </div>
      <div id="vimeo-player-100" class="vimeo-player col s12 m6 l4">
        <object class="col s12">
          <param name="allowfullscreen" value="true" />
          <param name="allowscriptaccess" value="always" />
          <param name="movie"
            value="https://vimeo.com/moogaloop.swf?clip_id=13597056&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=&amp;fullscreen=1" />
          <embed
            src="https://vimeo.com/moogaloop.swf?clip_id=13597056&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=&amp;fullscreen=1"
            type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always"></embed>
        </object>
      </div>
    </div>
  </div>
</div>

<?php
require_once Values::FOOTER_INC;

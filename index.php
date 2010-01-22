<!DOCTYPE html PUBLIC 
	  "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    
    <script type="text/javascript">
      document.write( "<style type=\"text/css\"><!-- " +
	      "@import url(\"css/jd.gallery.css\");" + 
	      "@import url(\"css/main.css\");" + 
	      "--></style>" );
    </script>

    <script src="scripts/mootools-1.2.1-core-yc.js" type="text/javascript"></script>
    <script src="scripts/mootools-1.2-more.js" type="text/javascript"></script>
    <script src="scripts/jd.gallery.js" type="text/javascript"></script>

    <title>Welcome to TheSoftwareFactory...</title>
  </head>

  <body>
    <div id="header">
      <a href="/"><img src="images/Tsf.png" alt="TheSoftwareFactory Logo"/></a>
      <ul class="nav">
	<li><a href="wiki/">Public Wiki</a></li>
	<li><a href="pub/">Downloads</a></li>
	<li><a href="http://git.thesoftwarefactory.be">Git Repositories</a></li>
	<li><a href="http://blog.thesoftwarefactory.be">Blog</a></li>
      </ul>
      
      <div id="search">
	<form action="/wiki/Special:Search" method="get">
	  <div>
	    <label for="searchbox">Search TSF
	      <input type="text" name="search" id="searchbox"/>
	    </label>
	  </div>
	</form>
      </div>
    </div>

    <div id="carousel">
      <div id="tabs">
	<a href="#" onclick="myGallery.goTo(0);">
	  <img src="images/adl_tab_bw.jpg"  alt="images/adl_tab.jpg" 
	       id="thumb0" width="130" height="65"/>
	</a>
	<a href="#" onclick="myGallery.goTo(1);">
	  <img src="images/canvas2d_tab_bw.jpg" alt="images/canvas2d_tab.jpg" 
	       id="thumb1" width="130" height="65"/>
	</a>
	<a href="#" onclick="myGallery.goTo(2);">
	  <img src="images/umlcanvas_tab_bw.jpg" alt="images/umlcanvas_tab.jpg" 
	       id="thumb2" width="130" height="65"/>
	</a>
	<a href="#" onclick="myGallery.goTo(3);">
	  <img src="images/tmf_tab_bw.jpg" alt="images/tmf_tab.jpg" 
	       id="thumb3" width="130" height="65"/>
	</a>
      </div>

      <div class="content">
	<div id="myGallery">
	  <div class="imageElement">
	    <a href="wiki/ADL" title="Visit the ADL Project website" 
	       class="open"></a>
	    <img src="images/adl_banner.jpg" class="full" />
	  </div>
	  <div class="imageElement">
	    <a href="wiki/Canvas2D" title="Visit the Canvas2D Project website" 
	       class="open"></a>
	    <img src="images/canvas2d_banner.jpg" class="full" />
	  </div>
	  <div class="imageElement">
	    <a href="wiki/UmlCanvas" title="Visit the UmlCanvas Project website"
	       class="open"></a>
	    <img src="images/umlcanvas_banner.jpg" class="full" />
	  </div>
	  <div class="imageElement">
	    <a href="http://themodelfactory.be" title="Visit TheModelFactory"
	       class="open"></a>
	    <img src="images/tmf_banner.jpg" class="full" />
	  </div>
	</div>
      </div>
      
    </div>
    
    <div id="news">
      <h1>News from the Factory Floor</h1>

<?php 

  include_once 'common.php/inc/TwitterFeed.php';

?>
      <p align="right"><a href="http://twitter.com/TSF_News">follow us on twitter...</a></p>

      <ul>
        <li>Happy New Year! We're starting the year with a special <a href="http://blog.thesoftwarefactory.be/2010/01/shifting-into-a-higher-gear/">2 month period</a>, dedicated entirely to our projects. We're also moving into the Twitter space and use it to publish news on all of our projects.</li>
      </ul>
    
      <p align="right"><a href="news.html">see older news...</a></p>
    </div>
    
    <div id="footer">
      <!--<div id="validation">
	<a href="http://validator.w3.org/check?uri=referer">
	  <img src="images/w3c-xhtml.png"
	       alt="Valid XHTML 1.0 Transitional"/></a>
	<a href="http://jigsaw.w3.org/css-validator/check/referer">
          <img src="images/w3c-css.png" alt="Valid CSS!" /></a>
      </div>-->
      <a href="contact.html">Contact</a> | 
      <a href="map.html">Site Map</a><br/>

      &copy; 2008-2009 The Software Factory. 
      <a href="terms.html">Terms &amp; Conditions</a> | 
      <a href="privacy.html">Privacy Statement</a>

<a href="http://webuml.org"><img src="http://webuml.org/images/webuml-badge.png" alt="Set UML Free!" style="border-width:0;float:right;vertical-align:middle;"></a>

    </div>

    <script type="text/javascript">
      <!--
      var myGallery;
      function swapThumb(i) {
        var t = document.getElementById( "thumb"+i );
	var src = t.src;
	t.src = t.alt;
	t.alt = src;
      }
      function startGallery() {
        myGallery = new gallery($('myGallery'), {
          timed: true,
	  //showArrows: false,
	  showCarousel: false,
	  //embedLinks: false,
	  showInfopane: false,
	  delay: 5000
	});
	myGallery.addEvent( "onStartChanging", 
	  function() { swapThumb( this.currentIter ); } );
	myGallery.addEvent( "onChanged", 
	  function() { swapThumb( this.currentIter ); } );
        swapThumb(0);
      }
      window.addEvent('domready',startGallery);
      -->
    </script>

    <script type="text/javascript">
      <!--
      var gaJsHost = (("https:" == document.location.protocol) ? 
                       "https://ssl." : "http://www.");
      document.write(unescape("%3Cscript src='" + gaJsHost + 
        "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
      -->
    </script>
    <script type="text/javascript">
      <!--
      try {
        var pageTracker = _gat._getTracker("UA-393672-10");
        pageTracker._trackPageview();
      } catch(err) {}
      -->
    </script>

  </body>
</html>

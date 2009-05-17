<!DOCTYPE html PUBLIC 
	  "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <link rel="alternate" type="application/rss+xml" 
	  title="Current Releases by TheSoftwareFactory" 
	  href="http://thesoftwarefactory.be/pub/rss.php">
      
      <style type="text/css">
	<!--
	    @import url("../css/main.css");
	  -->
      </style>

      <style>
	.download {
	  border: 1px solid #ccc;
	  padding: 10px;
	}
	
	.feed {
	  margin-left: 3px;
	  padding: 0 0 0 19px;
	  background: url("../images/feed-icon-14x14.png") no-repeat 0 50%;
	}
      </style>
    </head>

    <title>Welcome to TheSoftwareFactory...</title>
  </head>

  <body>
    <div id="header">
      <a href="/"><img src="../images/Tsf.png" 
		       alt="TheSoftwareFactory Logo"/></a>
      <ul class="nav">
	<li><a href="../wiki/">Public Wiki</a></li>
	<li><a href="./">Downloads</a></li>
	<li><a href="http://git.thesoftwarefactory.be">Git Repositories</a></li>
	<li><a href="http://blog.thesoftwarefactory.be">Blog</a></li>
      </ul>
      
      <div id="search">
	<form action="../wiki/Special:Search" method="get">
	  <div>
	    <label for="searchbox">Search TSF
	      <input type="text" name="search" id="searchbox"/>
	    </label>
	  </div>
	</form>
      </div>
    </div>

    <div style="margin-left: 150">

      <h1>Downloads</h1>
      Below you find the different downloads available.<br>
	You can also <a href="rss.php" class="feed">subscribe to our current releases feed</a> to stay informed of new releases.
<?php
	   
include_once "file_listing.php";

foreach( get_current_dists_grouped() as $dist => $files) {
  print <<<EOT
<h2>$dist</h2>
<div class="download current">
EOT;
  foreach( $files as $filename ) {
    print <<<EOT
<li><a href="$filename.zip">$filename</a></li>
EOT;
  }
print "</div>";
     
   }

?>

    </div>

    <br><br>
    
    <div id="footer">
      <div id="validation">
	<a href="http://validator.w3.org/check?uri=referer">
	  <img src="../images/w3c-xhtml.png"
	       alt="Valid XHTML 1.0 Transitional"/></a>
	<a href="http://jigsaw.w3.org/css-validator/check/referer">
          <img src="../images/w3c-css.png" alt="Valid CSS!" /></a>
      </div>
      <a href="contact.html">Contact</a> | 
      <a href="feedback.html">Feedback</a> | 
      <a href="help.html">Help</a> | 
      <a href="map.html">Site Map</a><br/>

      &copy; 2008-2009 The Software Factory. 
      <a href="terms.html">Terms &amp; Conditions</a> | 
      <a href="privacy.html">Privacy Statement</a>
    </div>

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


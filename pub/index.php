<html>
<head>
<link rel="alternate" type="application/rss+xml" 
      title="Current Releases by TheSoftwareFactory" 
      href="http://thesoftwarefactory.be/pub/rss.php">
<style>
.download {
border: 1px solid #ccc;
     margin:10px;
}

.feed {
  margin-left: 3px;
  padding: 0 0 0 19px;
  background: url("../images/feed-icon-14x14.png") no-repeat 0 50%;
}

</style>
</head>

<body>
<img src="../images/Tsf.png" align="left"/>

<div style="margin-left: 150">

<h1>Downloads</h1>
Below you find the different downloads available.<br>
You can also <a href="rss.php" class="feed">subscribe to our current releases feed</a> to stay informed of new releases.
<?

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
<hr>
TheSoftwareFactory is a joint venture between <a href="http://2know.be">2Know BVBA</a>, <a href="http://intodesign.be">IntoDesign BVBA</a> and Bellekens IT.<br>
You can contact us through <tt>contact (at) thesoftwarefactory (dot) be</tt>.

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-393672-10");
pageTracker._trackPageview();
} catch(err) {}</script>

</body>
</html>


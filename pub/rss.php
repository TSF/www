<?php

include_once "file_listing.php";

$xml = '<?xml version="1.0" encoding="ISO-8859-1" ?>
<rss version="2.0"> 
  <channel>
    <title>Current Releases by TheSoftwareFactory</title> 
    <link>http://thesoftwarefactory.be/pub</link> 
    <description>The latest releases by TheSoftwareFactory.</description>';

foreach( get_current_dists() as $filename) {
  $file = $filename.".zip";
  $xml .= '
    <item> 
      <title>'.$filename. '</title> 
      <link>http://thesoftwarefactory.be/pub/'. $file .'</link> 
    </item>'; 
}

$xml .= '
  </channel> 
</rss>'; 

print $xml;

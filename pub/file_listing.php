<?php

function get_dists() {
  $dists = array( "ADL"           => array(),
		  "ADL-src"       => array(),
		  "Canvas2D"      => array(),
		  "Canvas2D-src"  => array(),
		  "Canvas2D-ext"  => array(),
		  "UmlCanvas"     => array(),
		  "UmlCanvas-src" => array(),
		  "UmlCanvas-ext" => array());
  
  foreach( glob( "*.zip" ) as $file) {
    if( ereg("([a-zA-Z0-9]+)-([0-9]+)\.([0-9]+)-([0-9]+)(-[a-z]+)?\.zip", 
	     $file, $regs) ) {
      if( array_key_exists( $regs[1].$regs[5], $dists ) ) {
	$dists[$regs[1].$regs[5]][] = $regs[2] . "." . $regs[3] . "-" .$regs[4];
      }
    }
    if( ereg("([a-zA-Z0-9]+)-([0-9]+)\.([0-9]+)(-[a-z]+)?\.zip", 
	     $file, $regs) ) {
      if( array_key_exists( $regs[1].$regs[4], $dists ) ) {
	$dists[$regs[1].$regs[4]][] = $regs[2] . "." . $regs[3];
      }
    }
  }

  //print_r( $dists );
  return $dists;
}

function latest($versions) {
  $major = 0;
  $minor = 0;
  $build = 0;
  
  foreach( $versions as $version ) {
    if( ereg( "([0-9]+)\.([0-9]+)(-([0-9]+))?", $version, $regs ) ) {
      if( $regs[1] > $major ) {
	$major = $regs[1]; $minor = $regs[2]; $build = $regs[4];
      } elseif( $regs[1] == $major && $regs[2] > $minor ) {
	$minor = $regs[2]; $build = $regs[4];
      } elseif( $regs[1] == $major && $regs[2] == $minor && $regs[4] > $build ){
	$build = $regs[4];
      }
    }
  }

  return $major.'.'.$minor.( trim($build) != "" ? '-' . $build : "" );
}

function get_current_dists() {
  $current_dists = array();
  $dists = get_dists();
  foreach( $dists as $dist => $versions ) {
    if( count($versions) > 0 ) {
      $version = latest($versions);
      if( ereg( "([a-zA-Z0-9]+)(-[a-z]+)?", $dist, $regs ) ) {
	$current_dists[] = $regs[1] . '-' . $version . $regs[2];
      }
    }
  }
  return $current_dists;
}

function get_current_dists_grouped() {
  $current_dists = array();
  $dists = get_dists();
  foreach( $dists as $dist => $versions ) {
    if( count($versions) > 0 ) {
      $version = latest($versions);
      if( ereg( "([a-zA-Z0-9]+)(-[a-z]+)?", $dist, $regs ) ) {
	if( !array_key_exists($regs[1],$current_dists) ) {
	  $current_dists[$regs[1]] = array();
	}
	$current_dists[$regs[1]][] = $regs[1] . '-' . $version . $regs[2];
      }
    }
  }
  return $current_dists;
}

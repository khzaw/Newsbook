<?php
function curPageURL() {
 $pageURL = 'http://';
 //if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}


function curPageName() {
 return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}


function getMonth($string) {
	$woohoo = explode(" ", $string);
	$month = substr($woohoo[0], 0, 3);
	return $month;
	

}

function getDay($string) {
	$wohoo = str_replace(",", "", explode(" ", $string));
	return $wohoo[1];
}

function getYear($string) {
	$woohoo = str_replace(",", "", explode(" ", $string));
	return $woohoo[2];
}

function getTime($string) {
	$woohoo = explode(" ", $string);
	return $woohoo[3]." ".$woohoo[4];
}
?>
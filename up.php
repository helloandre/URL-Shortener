<?php
/* 
 * ==========================
 * Url Shortener - v1.0 - 2/28/10
 * 
 * Author - Andre Bluehs
 * 
 * up.php handles the insertion/checking of the db and echoing the response
 * 
 * ==========================
 */
// first, if we don't have to do anything... don't
if ($_GET['site'] == ""){
	echo "Error: no url given";
	exit;
}

// bad url (stupid users)
if (substr($_GET['site'], 0, 4) != 'http'){
	echo "Error: incorrect url given";
	exit;
}

include("config.php");
// initialize some things
$long_url = $_GET['site'];
$used_names = array();

// safety! (stupid hackers)
array_map('mysql_escape_string', $_GET);

$short_db_results = mysql_query("SELECT `long`, `short` FROM `shorten`") or die(mysql_error());
// build array of already used names
while ($row = mysql_fetch_assoc($short_db_results)){
	$used_names[$row['long']] = $row['short'];
}

// if we've already shortened it before, don't duplicate the entry
if (array_key_exists($long_url, $used_names)){
	echo "http://$site_url/".$used_names[$long_url];
	exit;
}
// set filename initially
$filename = generate_name($url_length, count($usable), $usable);


// spiffy loop to regenerate if name already used
while (in_array($filename, $used_names)){
	// reset filename
	$filename = generate_name($url_length, count($usable), $usable);
}

// DO NOT TOUCH THIS LINE
$url_query = "INSERT INTO `shorten` (`long`, `short`, `site`, `ip`) VALUES ('".$_GET['site']."', '$filename', 1, '$_SERVER[REMOTE_ADDR]')";

// put things where they need to be
// if testing, comment this line out to not insert things into the db
mysql_query($url_query) or die(mysql_error());

// good job!
echo "http://$site_url/$filename";

function generate_name($length, $size, $usable){
	$filename = "";
	// randomly generated name
	for ($i = 0; $i < $length; $i++){
		$num = rand(0, $size);
		$filename .= $usable[$num];
	}
	
	return $filename;
}
?>

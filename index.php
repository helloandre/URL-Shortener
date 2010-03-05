<?php
include("config.php");
// safety!
array_map('mysql_escape_string', $_GET);

if (isset($_GET['i']) && $_GET['i'] != ""):
	// fetch url 
	$url_result = msyql_query("SELECT * FROM `shorten` WHERE `short` = '$_GET[i]' LIMIT 1");
	$url = mysql_fetch_assoc($url_result);
	
	/*  ------- ADVANCED USERS ---------  */
	/*  
	 * 
	 * Put analytics javascript here
	 * 
	 * If you choose to use javascript here, you must
	 * change the following variable to true:
	 */
	$use_js = false;
	
	if ($use_js){
		// javascript redirection!
?>
		<span id='end-location'><?php echo $url['long'] ?></span>
		<script type='text/javascript'>
			var url = getElementById("end-location");
			window.location = url;
		</script>
<?php
	}
	else {
		// php redirection!
		header("Location: $url[long]");
	}
else :
?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

	<head>
		<title><?php echo $site_name ?> - url shortening</title>
		<style>
		body {
			text-align: center;
			color: #B4C5D3;
		}

		submit {
			padding: 7px;
		}
		</style>	
	</head>

	<body>
	<p>Url to shorten:</p>
		<form action='up.php' method='GET'>
			<input name='site' size=50>
			<input type='submit' value='Shorten'>
		</form>
	</body>
<?php
endif;
?>

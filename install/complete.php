<?php
include("../config.php");
$query = "CREATE TABLE IF NOT EXISTS `shorten` (
  `long` text NOT NULL,
  `short` varchar(10) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `site` tinyint(4) NOT NULL,
  `ip` varchar(20) DEFAULT NULL,
  UNIQUE KEY `short` (`short`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1";
mysql_query($query) or die(mysql_error());
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title><?php echo $site_name ?></title>
	<style>
	body {
		text-align: center;
		color: #B4C5D3;
	}
	
	a {
		font-size: 1.2em;
		color: #5D5D5D;
		padding: 3px;
	}
	</style>	
</head>

<body>
	Installation Complete!<br>
	<a href='../index.php'>Visit My Site</a>
</body>


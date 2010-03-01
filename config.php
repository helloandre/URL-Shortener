<?
// The database name
$db_name = "uploads";
// the database user
$db_user = "uploads_user";
// the database password
$db_pass = "uploads_pass";

// this is where your url will go
$site_url = "ablu.us";

// name of your site
$site_name = "Ablu.us";

/******
 * Advanced features
 *****/

// easily expandable to include uppercase and numbers
$usable = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm',
		'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
		
/* this controls how many letters/numbers in the url
 * 		for only lowercase alphabet (default as of v1.4):
 * 		3 -> 26 ^ 3 = 17576
 * 		4 -> 26 ^ 4 = 456976
 * 
 * the higher this number, the longer the url, but also the more you can handle
 */		
$url_length = 3;

/*  ------- DO NOT TOUCH BELOW HERE ---------  */
/*  ------- VERY ADVANCED USERS ONLY --------  */

$db = new PDO("mysql:dbname=$db_name;host=localhost", $db_user, $db_pass);

$current = getcwd()."/config.php";
?>

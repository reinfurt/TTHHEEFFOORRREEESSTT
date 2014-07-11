<?php








  ///////////////////
 //  DB Settings  //
///////////////////

	// Client Name
	$dbClient = "OPEN-RECORDS-GENERATOR";

	// Client Color
	$dbColor = "000";
	$dbColor2 = "666";
	$dbColor3 = "333";
		
	// Client Username and Password -- read only
	$dbUser1 = "guest";
	$dbPass1 = "guest";

	// Client Username and Password -- read / write
	$dbUser2 = "main";
	$dbPass2 = "main";

	// Client Username and Password -- main
	$dbUser3 = "admin";
	$dbPass3 = "admin";

	// Database Start Date/Time
	$dbStart = mktime(10, 46, 00, 11, 26, 2013);
	// (hour, minute, second, month, day, year)

	// Client URL
	$dbHost = "http://www.tthheeffoorrreeesstt.com/";

	// DB Admin
	$dbAdmin = $dbHost ."OPEN-RECORDS-GENERATOR/";

	// DB Media
	$dbMedia = $dbHost ."MEDIA/";
	// Don't forget to set the permissions on this folder!







  ////////////////
 //  Database  //
////////////////

function dbConnectMain($dbUser) {

	$dbMainHost = "www7.pairlite.com";
	$dbMainDbse = "pl2022_tthheeffoorrreeesstt";

	if 		($dbUser == 1) {		$dbMainUser = "pl2022_r"; 	
$dbMainPass = "GhqRbdCr"; }
	else if ($dbUser == 2) {		$dbMainUser = "pl2022_w"; 	$dbMainPass = 
"knJ43Q2H"; }
	else if ($dbUser == 3) {		$dbMainUser = "pl2022";   	$dbMainPass = 
"vqkPwgDe"; }

	$dbConnect = MYSQL_CONNECT($dbMainHost, $dbMainUser, $dbMainPass);
	MYSQL_SELECT_DB($dbMainDbse, $dbConnect);
}







?>

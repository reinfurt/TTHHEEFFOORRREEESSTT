<?php




  ////////////////
 //  Database  //
////////////////

function systemDatabase() {

	$dbMainHost = "www7.pairlite.com";
	$dbMainUser = "pl2022";
	$dbMainPass = "vqkPwgDe";
	$dbMainDbse = "pl2022_tthheeffoorrreeesstt";

	$dbConnect = MYSQL_CONNECT($dbMainHost, $dbMainUser, $dbMainPass);
	MYSQL_SELECT_DB($dbMainDbse, $dbConnect);
}
systemDatabase();






?>

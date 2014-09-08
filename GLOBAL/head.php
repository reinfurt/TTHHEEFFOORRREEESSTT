<?php 
        date_default_timezone_set('America/New_York');
	require_once("_Library/systemDatabase.php"); 
	require_once("_Library/systemCookie.php");
	require_once("_Library/displayNavigation.php"); 
	require_once("_Library/displayMedia.php"); 

	// Parse $id

	$id = $_REQUEST['id'];		// no register globals	
	if (!$id) $id = "0";
	$ids = explode(",", $id);
	$idFull = $id;
	$id = $ids[count($ids) - 1];
	$pageName = basename($_SERVER['PHP_SELF'], ".html");
	$documentTitle = "Donelle Woolford";
	
	// Live?
	
	// use this only during Dev phase
	// $dev is passed in query and stored in cookie
	// $live is stored in database and turns on site
	// 0 = staging / 1 = live

	$dev = $_REQUEST['dev'];
	$dev = systemCookie("devCookie", $dev, 0);
	$sql    = "SELECT id, deck FROM objects WHERE name1 LIKE 'Live' AND active=1 LIMIT 1;";	
	$result =  MYSQL_QUERY($sql);
	$myrow  =  MYSQL_FETCH_ARRAY($result);
	if ( $myrow["deck"] == '1' ) $live = TRUE;
	if (!$dev && !$live) die('Under construction . . .');

	// Get $dev strings

	$forrest = $_REQUEST['forrest'];
	$italic = $_REQUEST['italic'];
	$bold = $_REQUEST['bold'];
	
	echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n"; 
?>


<!DOCTYPE html PUBLIC "-//W3C//Dtd XHTML 1.0 Transitional//EN" "http://www.w3.org/tr/xhtml1/Dtd/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title><?php echo $documentTitle; ?></title>
	<meta http-equiv="Content-Type" content="text/xhtml; charset=utf-8" />
	<meta http-equiv="Title" content="<?php echo $documentTitle; ?>" />
	<link rel="stylesheet" type="text/css" media="all" href="GLOBAL/global.css" />
	<script type="text/javascript" src="GLOBAL/global.js"></script>
	<script src="_Processing/processing-1.4.1.min.js"></script>
	
	<script type="text/javascript">
				
		function init() {

			// setTimeout("objectShow('main')", 2000);        
			setTimeout("objectShow('main')", 0);        
		}

		<?php
			if ( !$id ) echo "window.onload = init;";
		?>

	</script>		
</head>
<body>


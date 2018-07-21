<?php
/**
 * load the list from cookie
 */
header("Cache-Control: no-cache, must-revalidate");
if (file_exists("conn.json")) {
	$res = file_get_contents("conn.json");
	echo $res;
} else {
	echo "nolist";
} 

?>

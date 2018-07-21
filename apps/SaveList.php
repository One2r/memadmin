<?php
/**
 * save list
 */
date_default_timezone_set('Asia/Shanghai');
try {
	$list = $_POST['data'];
	$serlist = json_encode($list);
	file_put_contents("conn.json",$serlist);
	echo "OK";
} 
catch (Exception $e) {
	echo $e -> getMessage();
	exit;
} 

?>

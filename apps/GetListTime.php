<?php
/**
 * get list save time
 */
header("Cache-Control: no-cache, must-revalidate");
 if (file_exists("conn.json")) {
	$res = json_decode(file_get_contents("conn.json"),true);
	if(!empty($res) && isset($res['savetime'])){
		echo $res['savetime'];
	}else{
		echo "notime";
	}
} else {
	echo "notime";
} 

?>

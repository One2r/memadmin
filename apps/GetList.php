<?php
/**
 * load the list from cookie
 */
header("Cache-Control: no-cache, must-revalidate");
if (file_exists("conn.json")) {
	$res = json_decode(file_get_contents("conn.json"),true);
	if(!empty($res) && isset($res['connections'])){
		echo json_encode($res['connections']);
	}else{
		echo "nolist";
	}
} else {
	echo "nolist";
} 

?>

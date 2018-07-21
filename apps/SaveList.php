<?php
/**
 * save list
 */
date_default_timezone_set('Asia/Shanghai');
try {
	$list = $_POST['data'];
	$data = [
		"connections"=>$list,
		"savetime"=>date('Y-m-d H:i:s')
	];
	$serdata = json_encode($data);
	file_put_contents("conn.json",$serdata);
	echo "OK";
} 
catch (Exception $e) {
	echo $e -> getMessage();
	exit;
} 

?>

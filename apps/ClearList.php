<?php
/**
 * clear up the list information saved in session
 */
try {
	file_exists("conn.json") && unlink("conn.json");
	echo "OK";
} 
catch (Exception $e) {
	echo $e -> getMessage();
	exit;
} 

?>

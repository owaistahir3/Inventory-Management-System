<?php

/**
* 
*/
function connect(){
	include_once("constants.php");
	$conn = new Mysqli(HOST,USER,PASS,DB) or die ("connection Failed %s\n" . $conn -> error);
	return $conn;
}

function closeConn($conn){
    $conn -> close();
}

?>
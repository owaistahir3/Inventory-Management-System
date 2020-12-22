<?php
include_once("./database/db2.php");
$conn = connect();
if(isset($_SESSION["userid"]))
{
session_destroy();
}
header("location:".DOMAIN."/");
?>
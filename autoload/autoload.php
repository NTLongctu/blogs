<?php
	session_start();
	require_once ("libraries/Database.php");
	require_once ("libraries/Function.php");

	define("ROOT",$_SERVER['DOCUMENT_ROOT']."/blogs/public/uploads/");
	$category = $db->fetchAll("category");
?>
<?php
	session_start();
	require_once ("libraries/Database.php");
	require_once ("libraries/Function.php");
	$db = new Database ;
	define("ROOT",$_SERVER['DOCUMENT_ROOT']."/blogs/img/");
	$category = $db->fetchAll("category");
?>
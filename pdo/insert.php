<?php
	require('database.php');
	$stmt = $db->prepare("INSERT INTO post (title, body) VALUES(:title,:body)");
	$stmt->bindValue(":title","Hello World");
	$stmt->bindValue(":body","Hahaha Hellow World");
	$stmt->execute();

?>
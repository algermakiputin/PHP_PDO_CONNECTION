<?php
	require('database.php');
	$stmt = $db->prepare("UPDATE post set title = :title WHERE id = :id ");
	$stmt->bindValue(":title","My Updated Title");
	$stmt->bindValue(":id",1);
	$stmt->execute();
?>
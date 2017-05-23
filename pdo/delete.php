<?php
	require('database.php');
	$stmt = $db->prepare("DELETE FROM post WHERE id=:id");
	$stmt->bindValue(":id",4);
	$stmt->execute();
?>
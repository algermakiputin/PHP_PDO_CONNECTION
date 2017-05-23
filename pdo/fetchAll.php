<?php
	require('database.php');
	$stmt = $db->query("SELECT * FROM post");
	$resultset = $stmt->fetchAll(PDO::FETCH_ASSOC);
	foreach ($resultset as $row) {
		echo "$row[title] <br> $row[body]  <br><br>";
	}
?>
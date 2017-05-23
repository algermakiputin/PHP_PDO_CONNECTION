<?php
	require('database.php');
	$stmt = $db->query("SELECT * FROM post");
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		echo "$row[title] <br> $row[body]  <br><br>";
		var_dump($row);
	}
?>
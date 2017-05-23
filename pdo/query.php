<?php
	require('database.php');
	foreach ($db->query("SELECT * FROM post") as $row) {
		echo "$row[title] <br> $row[body]  <br><br>";
	}
?>
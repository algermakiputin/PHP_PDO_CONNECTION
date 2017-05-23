<?php
	require('database.php');
	$stmt = $db->prepare("SELECT * FROM post WHERE title = :title");
	$titles = array('first', 'second');
	foreach($titles as $title){
		$stmt->bindParam(":title", $title);
		$stmt->execute();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			echo "<h2>$row[title]</h2> <br> $row[body]  <br><br>";
		}
	}
?>	
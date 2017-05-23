<?php
	try{
		$db = new PDO('mysql:host=localhost;dbname=a_blog;charset=utf8','root','');
	}catch(Exception $e){
		echo "An error has occured ";	
	}
?>
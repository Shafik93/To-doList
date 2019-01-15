<?php
	function db(){
		global $link;
		$mysql_host = 'localhost';
		$mysql_user = 'root';
		$mysql_pass = '';
		$mysql_db = 'todolist';
		$link = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db) or
		die ("couldn't connect to database");
		return $link;
	}
?>
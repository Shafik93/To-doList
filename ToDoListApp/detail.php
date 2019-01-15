<?php
	require_once("db_connect.php");

	if(isset($_GET['id'])){
		$id = $_GET['id'];
		
		db();
		global $link;
		$query = "SELECT title, comments, date FROM todo WHERE id = '$id'";
		$result = mysqli_query($link, $query);
		if($result){
			if(mysqli_num_rows($result) == 1){
				$row=mysqli_fetch_array($result);
				$title = $row['title'];
				$comments = $row['comments'];
				$date = $row['date'];
				
				echo 
				"<h2>$title</h2> 
				<p><strong>Comments: </strong>				
				$comments</p>
				<small>$date</small>";
			}
			else
				echo 'no todo';
		}
		else
			echo 'Query failed';
		mysqli_close($link);
	}
	
?>
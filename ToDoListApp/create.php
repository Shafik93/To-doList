<html>
<head>
<title>Todo List</title>
</head>
<body>
<h1>My Todo List</h1>
<form method="post" action="create.php">
	<label>Title: </label>
	<input type="text" name="title">
	<label>Comments: </label>
	<input type="text" name="comments">
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>

<?php
	require_once("db_connect.php");
	if(isset($_POST['submit'])){
		if(!empty($_POST['title']) && !empty($_POST['comments'])){
			$title =$_POST['title'];
			$comments =$_POST['comments'];
			
			db();
			global $link;
			$query = "INSERT INTO todo(title, comments, date) VALUES('$title', '$comments', now())";
			$insert = mysqli_query($link, $query);
			if(!$insert){
				echo 'Query failed';
				die();
			}
			mysqli_close($link);
			header('Location: index.php');
		}
		else
			echo 'Title or comments cannot be empty!';
		
	}
	
?>
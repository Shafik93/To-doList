<?php
	require_once("db_connect.php");
?>
	<html>
	<head>
	<title>My Agenda</title>
	</head>
	<body>
	<h2 align="center">My Agendas<h2>
	
	<table border="1" width="70%" align="center" border-collapse: collapse;">
	<tr>
		<th colspan=3><a href="create.php">Add todo</a></th>
	</tr>
	<tr>
		<th>Title</th>
		<th>Date</th>
		<th colspan=2>Action</th>
	</tr>
	<?php
		db();
		global $link;
		$query = "SELECT * FROM todo";
		$result = mysqli_query($link, $query);
		
		while($row= mysqli_fetch_array($result)){
			$id = $row['id'];
			$title = $row['title'];
			$date = $row['date'];
		
	?>
	
	
	<tr>
		<td><a href="detail.php?id=<?php echo $id?>"><?php echo $title?></a></td> 
		<td><?php echo $date?></td>
		<td><button><a href="delete.php?id=<?php echo $id?>">Delete</a></button></td>
	</tr>
	
	
	<?php
		}
	?>
	</table>
	</body>
	</html>
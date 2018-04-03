<?php
	session_start();
	require("connection.php");
	$q2="create table comments
  		(   username varchar(255),
 			comments varchar(255)
  				)";
  			mysqli_query($connection,$q2);
	if(isset($_POST) & !empty($_POST))
	{
		$connect = "SELECT * FROM comments INNER JOIN user ON comments.username = user.username;";
		$username = mysqli_real_escape_string($connection, $_POST['username']);
		$comments = mysqli_real_escape_string($connection, $_POST['comments']);
		$query = "INSERT INTO comments(comments, username) VALUES('$comments','$username')";
			if(!mysqli_query($connection, $query))
			{
				die("Failed to connect to table: ".mysql_error());
				echo "hello";
			}
			else
			{
				$result = mysqli_query($connection, $query);
				while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
				{
					echo $username." : "."<br>".$comments;
				}
			}
	}	
?>
<html>
<head>
<title>discuss</title>
</head>
<body>
<form method = "POST">
	<h3>Name : </h3><br>
	<input type = "text" name = "username"><br>
	<h3>Comments : </h3><br>
	<textarea name = "comments" rows = "10" cols = "40"></textarea><br>
	<input type = "submit" value = "Post Comment"><br>
	<input type = "button" onclick = "location.href = 'reply.php';" value = "Reply">
</form>
</body>
</html>
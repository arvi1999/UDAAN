<?php
$connection = mysqli_connect("localhost","root","Arvind@1999");
if(!$connection)
	echo "Failed to connect"."<br>";
$q1="create database ud_users;";
  mysqli_query($connection,$q1);
$dbconnect = mysqli_select_db($connection, "ud_users");
if(!$dbconnect)
	echo "Failed to connect to the database" . die(mysqli_error());
?>

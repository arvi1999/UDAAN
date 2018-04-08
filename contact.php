<?php
  session_start();
  require("connection.php");
  $a=$_POST['name'];
  $b=$_POST['email'];
  $c=$_POST['subject'];
  $d=$_POST['message'];
  $q2="create table contact
  (name varchar(255),
  email varchar(255),
  subject varchar(255),
  message varchar(255)
  )";
  mysqli_query($connection,$q2);
  $q3="insert into contact (name, email, subject, message) values ('$a','$b','$c','$d')";
  mysqli_query($connection,$q3);
  if(!isset($_SESSION['username'])) 
    header('location:http://localhost/udaan/udaan_index.php');
  else
    header('location:http://localhost/udaan/user_index.php');
  mysqli_close($con);
?>
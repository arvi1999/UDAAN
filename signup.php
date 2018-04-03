<?php
	require_once("connection.php");
	$q2="create table user
  		(   firstname varchar(255),
 			lastname varchar(255),
  			email varchar(255),
  			username varchar(50) unique,
  			password varchar(150)
  				)";
  			mysqli_query($connection,$q2);
	if(isset($_POST) & !empty($_POST))
	{
		$firstname = mysqli_real_escape_string($connection, $_POST['firstname']);
		$lastname = mysqli_real_escape_string($connection, $_POST['lastname']);
		$email = mysqli_real_escape_string($connection, $_POST['email']);
		$username = mysqli_real_escape_string($connection, $_POST['username']);
		$password = md5($_POST['password']);
		$cpassword = md5($_POST['cpassword']);
		
		if($password == $cpassword){
			$usernamesql = "SELECT * FROM user WHERE username='$username'";
			$usernameres = mysqli_query($connection, $usernamesql);
			$count = mysqli_num_rows($usernameres);
			if($count == 1)
				echo "Username exists in the database, try with a different username";
			
			$emailsql = "SELECT * FROM user WHERE email='$email'";
			$emailres = mysqli_query($connection, $emailsql);
			$ecount = mysqli_num_rows($emailres);
			if($ecount == 1)
				echo "Email exists in the database, please reset the password";
			echo "Password matches";
					$sql = "INSERT INTO user (firstname, lastname, email, username, password) VALUES 
				('$firstname','$lastname','$email','$username','$password')";
		$result = mysqli_query($connection, $sql);
		if($result)
		{
			echo "User registered successfully";
			header('location:http://localhost/udaan/login.php');
		}
		else
			echo "Registration failed";
		}
		else
			echo "Password does not matches";

	}
?>

<!--
<html>
<head>
<title>signup</title>
<style type = "text/css">
	input[type=submit]{ width : 25%;  color : green; padding : 14px 20px; margin : 8px 0;
					border : none; border-radius : 4px; cursor : pointer; font-size : 15px;}
	input[type=text]{ width : 25%; border-radius : 5px; font-size : 20px; margin : 10px;}
	input[type=password]{ width : 25%; border-radius : 5px; font-size : 20px; margin : 10px;}
	input[type=reset]{ width : 25%; border-radius : 4px; font-size : 15px; padding : 14px 20px; border : none;
						color : green; cursor : pointer;}
	.form{ margin : 20px 30px;}
	p{ text-decoration : underline; text-shadow : ultra-expanded; color : purple; font-size : 20px;}
	.back{ font-size : 30px;}
</style>
</head>
<body><hr>
<center>
<p font-size = "40%" color = "pink">SIGNUP FORM</p><hr>
<div class = "form">
<form method = "post" action = "">
	<input type = "text" name = "firstname" placeholder = "Firstname" value = "<?php if(isset($firstname) &
					!empty($firstname)){ echo $firstname;} ?>"><br>				
	<input type = "text" name = "lastname" placeholder = "Lastname" value = "<?php if(isset($lastname) &
					!empty($lastname)){ echo $lastname;} ?>"><br>
	<input type = "text" name = "email" placeholder = "Email-id" value = "<?php if(isset($email) &
					!empty($email)){ echo $email;} ?>"><br>
	<input type = "text" name = "username" placeholder = "Username" value = "<?php if(isset($username) &
					!empty($username)){ echo $username;} ?>"><br>
	<input type = "password" name = "password" placeholder = "Password"><br>
	<input type = "password" name = "cpassword" placeholder = "Confirm password"><br>
	<input type = "submit" value = "Submit">
	<input type = "reset" value = "Reset">
</form>
</body>
</html>
-->

<!doctype html>
<html>
  <head>
    <title>Sign-up</title>
	<style>
  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="photos\udaan1.jpg" type="image/x-icon">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="bootstrap.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="bootstrap.css" />
	<script src="jquery.js"></script>
    <script src="bootstrap.js"></script>
  </head>
  <body>

  		<div class="container-fluid"><br/><br/>
    <div class="jumbotron" style="background-color:steelblue;"><h1 align="center"><img src="photos\udaan1.jpg" style="width:100px;height:100px;"/> Udaan</h1></div>

      <div class="container-fluid">
  <nav class="navbar navbar-inverse" style="background-color:steelblue;">
    <div class="container-fluid">
      <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
      </button>
    
    <a class="navbar-brand" href="udaan_index.php" ><img src="photos\udaan1.jpg" style="width:30px;height;30px;"/></a></div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav" >
    <li><a href="udaan_index.php" style="color:white;font-weight:bold;font-size:18px;"><i class="material-icons" style="font-size:18px">home</i>Home</a></li>
    <li><a href="initiatives.php" style="color:white;font-weight:bold;font-size:18px;">Initiatives</a></li>
    <li><a href="events.php" style="color:white;font-weight:bold;font-size:18px;">Events</a></li>
    <li><a href="gallery.php" style="color:white;font-weight:bold;font-size:18px;">Gallery</a></li>
    <li><a href="discussion.php" style="color:white;font-weight:bold;font-size:18px;">Discussion</a></li>
    <li><a href="advocacy.php" style="color:white;font-weight:bold;font-size:18px;">Advocacy</a></li>
    <li><a href="contactus.php" style="color:white;font-weight:bold;font-size:18px;">Contact us</a></li>
    <li><a href="donate.php" style="color:white;font-weight:bold;font-size:18px;">Donate Now</a></li>
    <li><a href="about.php" style="color:white;font-weight:bold;font-size:18px;">About us</a></li>
  </ul>
  <ul class="nav navbar-nav navbar-right">
      
      <li><a href="login.php" style="color:white;font-weight:bold;font-size:18px;"><i class="material-icons" style="font-size:18px">person</i> Log-in</a></li>
    </ul></div>
    </div></div>
    </nav>
  </div></div>

  <br/><h1 style="text-align:center;">Membership Form</h1><br/><br/>
    <form class="form-horizontal" action=" " method="post">
	  <div class="form-group">
	    <label for="fname" class="control-label col-sm-4">First-Name:</label>
	    <div class="col-sm-4"><input class="form-control" type="text" placeholder="First Name" id="fname" name="firstname" required/></div>
	  </div>
	  <div class="form-group">
	    <label for="lname" class="control-label col-sm-4">Last-Name:</label>
	    <div class="col-sm-4"><input class="form-control" type="text" placeholder="Last Name" id="lname" name="lastname" required/></div>
	  </div>
    <div class="form-group">
      <label for="email" class="control-label col-sm-4">E-Mail:</label>
      <div class="col-sm-4"><input class="form-control" type="text" placeholder="E-Mail Id" id="email" name="email" required/></div>
    </div>
	  <div class="form-group">
	    <label for="dob" class="control-label col-sm-4">User Name:</label>
	    <div class="col-sm-4"><input class="form-control" type="text" placeholder="User Name" id="username" name="username" required/></div>
	  </div>
	  
	  <div class="form-group">
	    <label for="password" class="control-label col-sm-4">Password:</label>
		<div class="col-sm-4">
	    <input class="form-control" type="password" placeholer="Password" id="password" name="password" required/></div>
	  </div>
	  <div class="form-group">
	    <label for="password" class="control-label col-sm-4">Confirm-Password:</label>
		<div class="col-sm-4">
	    <input class="form-control" type="password" placeholer="Password" id="password" name="cpassword" required/></div>
	  </div>
	  <div class="form-group">        
    </div>
	<div class="form-group">        
      <div class="col-sm-offset-4 col-sm-2">
        <button type="submit" class="btn btn-success">Register</button>
      </div>
	  <div class="col-sm-2">
        <button type="reset" class="btn btn-success">Reset</button>
      </div>
    </div>
	<div class="form-group">
	<div class="col-sm-offset-4 col-sm-4">
	<h4>Already having an Account?  Click here for Log-in
	<a href="login.php">Log-in</a></h4>
	</div></div>
	</form>
  </div>


<br/><br/>
<hr width="75%" align="center"/>
     <div class="footer-bottom">
        <div class="container">
            <div class="text" style="font-size:20px;color:black;text-align:center;">
                <p>Copyright &copy; 2018, <span style="color:maroon;">Udaan</span> | All Right Reserved.</p>
            </div>
        </div>
    </div>

  </body>
</html>
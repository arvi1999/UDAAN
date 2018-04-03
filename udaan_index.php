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
      header('location:http://localhost/udaan/udaan_index.php');
    }
    else
      echo "Registration failed";
    }
    else
      echo "Password does not matches";

  }
?>

<?php
session_start();
require("connection.php");
if(isset($_POST) & !empty($_POST))
{
  $username = mysqli_real_escape_string($connection, $_POST['username']);
  $password = md5($_POST['password']);
  $sql = "SELECT * FROM user WHERE username = '$username' and password = '$password';";
  $result = mysqli_query($connection, $sql);
  $count = mysqli_num_rows($result);
  if($count == 1)
  {
    $_SESSION['username'] = $username;
    header('location:http://localhost/udaan/user_index.php');
  }
  else
  {
    echo "Invalid login";
  }
}
?>




<!doctype html>
<html>
  <head>
    <title>Udaan</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="shortcut icon" href="photos\udaan1.jpg" type="image/x-icon">
	  <link rel="stylesheet" href="bootstrap.css" />
	  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>
    <script src="jquery.js"></script>
    <script src="bootstrap.js"></script>


    <style>
      .active 
         {
          background-color: #717171;
         }

/* Fading animation */


      @-webkit-keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
            } 

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
.row
{
	position:relative;
	bottom:47px;
	height:50px;
}

    #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: maroon;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}

	  #i1 {
            padding: 20px;
			font-size: 30px;
			width: 100px;
			text-align: center;
			text-decoration: none;
			margin: 5px 2px;
			border-radius: 100%;
		  }

	  .fa:hover {
					opacity: 0.7;
				}

	  .fa-facebook {
                    background: #3B5998;
					color: white;
				   }

	  .fa-twitter {
					background: #55ACEE;
					color: white;
				  }	
	  .fa-linkedin {
					background: #007bb5;
					color: white;
			       }
      .fa-instagram {
					background: lightgreen;
					color: white;
					}
	</style>
    
  </head>
  <body>

<br/>
<header>
    <div class="container-fluid">
        <nav class="navbar navbar-default" role="navigation">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div class="navbar-header">
              <div class="navbar-brand">
                <a href="udaan_index.php" style="font-size:40px;color:teal;font-family:'Berkshire Swash'"><img src="photos\udaan1.jpg" style="width:70px;height:70px;"/> Udaan</a>
              </div>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <div class="menu" >
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation"><a href="udaan_index.php"><i class="material-icons" style="font-size:18px">home</i>Home</a></li>
                  <li role="presentation"><a href="initiatives.php" >Initiatives</a></li>
                  <li role="presentation"><a href="events.php" >Events</a></li>
                  <li role="presentation"><a href="gallery.php" >Gallery</a></li>
                  <li role="presentation"><a href="discussion.php">Discussion</a></li>
                  <li role="presentation"><a href="advocacy.php">Advocacy</a></li>
                  <li role="presentation"><a href="contactus.php" >Contact us</a></li>
                  <li role="presentation"><a href="donate.php">Donate Now</a></li>
                  <li role="presentation"><a href="stories.php" >Stories</a></li>
                  <li role="presentation"><a href="about.php" >About us</a></li>
                  <li role="presentation"><a type="button"  data-toggle="modal" data-target="#myModal2"><i class="material-icons" style="font-size:18px">person</i> Log-In</a></li>
                  <li role="presentation"><a type="button"  data-toggle="modal" data-target="#myModal"><i class="material-icons" style="font-size:18px">person_add</i> Sign-up</a></li>
                </ul>
              </div>
            </div>
        </nav>
    </div>
  </header>

  <!--slides-->
<br/>
  <div id="c1" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#c1" data-slide-to="0"></li>
      <li data-target="#c1" data-slide-to="1"></li>   
      <li data-target="#c1" data-slide-to="2"></li>
      <li data-target="#c1" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active">
        <img src="edu.jpg" alt="pic_1"/>
          <div class="carousel-caption">
            <h3 style="font-size:40px;">Girl's Education</h3>
          </div>
      </div>
      <div class="item">
        <img src="acid.jpg" alt="pic_2"/>
        <div class="carousel-caption">
          <h3 style="font-size:40px;">Happy Faces</h3>
        </div>
      </div>
      <div class="item">
        <img src="working.jpg" alt="pic_3"/>
        <div class="carousel-caption">
          <h3 style="font-size:40px;">Self Reliability</h3>
        </div>
      </div>
      <div class="item">
        <img src="download3.jpg" alt="pic_4"/>
        <div class="carousel-caption">
          <h3 style="font-size:40px;font-color:maroon;">Skill Developement</h3>
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#c1" data-slide="prev">
      <span class="glyphicon glyphicon-chevoron-left"></span>
      <span class="sr-only">previous</span>
    </a>
    <a class="right carousel-control" href="#c1" data-slide="next">
      <span class="glyphicon glyphicon-chevoron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
    <div style="text-align:center">
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span>
    </div>

<!-- end of slides-->

<!--<div class="container-fluid">
	<div class="jumbotron" style="background-color:steelblue; ">
		<marquee class="marq">

    <a style="color:maroon;" href="#"></a> 
    </marquee></div>
</div>-->

<br/><br/>

<div class="row" style="background:teal;"><marquee class="marq">
    <a style="color:white;font-size:23px;" href="#">Upcoming Events: 20/3/18-Nukkad Natak by the students of NIT Raipur on Domestic Violence, 27/3/18-Fashion show for acid victims</a> 
    </marquee></div>

<div class="container-fluid col-lg-12 col-md-12 col-sm-12 col-xg-12">
  <div class="col-lg-6 col-md-6 col-sm-12 col-xg-12">
    <h3 style="font-size:35px;color:teal;font-family:'Berkshire Swash'">About Udaan-</h3>
    <hr/>
    <p text-align="right-justified" style="font-color:maroon;font-size:20px;">UDAAN- a pioneering anti-trafficking organization working on the issue of sex trafficking and sex crime.Udaan works on the five pillars of Prevention, Protection, Rescue, Rehabilitation & Reintegration. It aims to raise the voice of the women against the discrimination and helps them from providing advocacy for social justice to providing neceessary skill training for making them self-reliable.This NGO provides the opportunity to education to those girls who are sold as sex-slaves by their parents.It works in collboration with government's skill india and digital india program.
    </p>
    <div>
      <img src="photos\ud.jpg" class="img-responsive"/>
    </div>
  </div>
  <br/><br/><br/>
  <div class="col-lg-6 col-md-4 col-sm-12 well well-sm col-xg-12" >
    <h3 style="color:maroon;padding-left:35px;">Notifications</h3>
    <marquee direction="up" class="marq">
    <a id="a1" style="color:maroon;padding-left:10px;" href="#"> 20/3/18-Nukkad Natak by the students of NIT Raipur on Domestic Violence </a> <br/><br/>
    <a id="a2" style="color:maroon;padding-left:10px;" href="#"> 27/3/18-Fashion show for acid victims </a>
    </marquee>
  </div>
</div>



	<!--Social Links-->
		<div class="container-fluid col-lg-12 col-md-12 col-sm-12 col-xg-12">
			<br/>
			<br/>
			<br/>
			<br/>
			<h3 style="text-align:center;">Be social with us</h3><hr width="40%" align="center" /><br/>
	    <div class="col-sm-3 col-xs-6 col-md-offset-4 col-md-1"><a href="https://www.facebook.com/Äŗvïņđ-Saini-1862569494027379" id="i1" class="fa fa-facebook "></a></div>
	    <div class="col-sm-3 col-xs-6 col-md-1"><a href="https://twitter.com/Arvi_1999" class="fa fa-twitter " id="i1"></a></div>
	    <div class="col-sm-3 col-xs-6 col-md-1"><a href="https://www.linkedin.com/in/arvind-saini-335556124/" id="i1" class="fa fa-linkedin "></a></div>
	    <div class="col-sm-3 col-xs-6 col-md-1"><a href="https://www.instagram.com/love_arvind/"  id="i1" class="fa fa-instagram "></a></div>
	  </div>

    

<!--bottom part-->


      <div class="container-fluid col-lg-12 col-md-12 col-sm-12 col-xg-12">
        <br/><br/><br/><br/>
        <div class="col-md-6 col-xs-12 col-lg-6 col-sm-12">
          <h3 class="header" style="font-color:maroon;text-align:center;font-size:30px;">Quick Links</h3>
          <hr width="20%" align="center" />
          <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12">
            <br/><br/>
              <ul class="list footer-menu" style="line-height: 30px;">
                  <li><a href="udaan_index.php" style="font-size:25px;color:teal;font-family:'Berkshire Swash';">Home</a></li>
                  <li><a href="initiatives.php" style="font-size:25px;color:teal;font-family:'Berkshire Swash';">Initiatives</a></li>
                  <li><a href="about.php" style="font-size:25px;color:teal;font-family:'Berkshire Swash';">The Team</a></li>
                  <li><a href="events.php" style="font-size:25px;color:teal;font-family:'Berkshire Swash';">Events</a></li>
                  <li><a href="gallery.php" style="font-size:25px;color:teal;font-family:'Berkshire Swash';">Gallery</a></li>
                  <li><a href="discussion.php" style="font-size:25px;color:teal;font-family:'Berkshire Swash';">Discussion</a></li>
                  <li><a href="advocacy.php" style="font-size:25px;color:teal;font-family:'Berkshire Swash';"> Advocacy</a></li>
                  <li><a href="contactus.php" style="font-size:25px;color:teal;font-family:'Berkshire Swash';">Contact us</a></li>    
                  <li><a href="about.php" style="font-size:25px;color:teal;font-family:'Berkshire Swash';">About us</a></li>
              </ul>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12">
            <br/><br/><br/><br/>
            <ul class="contact-info" style="line-height:30px;">
              <li><span style="font-size:30px;color:red;" class="fa fa-map-marker"></span><span style="font-size:25px;color:teal;font-family:'Berkshire Swash';">  NIT Raipur,
                G.E. Road<br/>
                Raipur (City),
                Raipur (District),<br/>
                Chhattisgarh State,<br/> India PIN: 492015</span></li>
              <li><span class="fa fa-envelope-o" style="font-size:30px;color:red;"></span><span style="font-size:25px;color:teal;font-family:'Berkshire Swash';">  udaan@gmail.com</span></li>
              <li><span class="fa fa-phone" style="font-size:30px;color:green;"></span><span style="font-size:25px;color:teal;font-family:'Berkshire Swash';">  +91 96 94 887366</span></li>
            </ul>
          </div>
        </div>
        <div class=" col-md-4 col-md-offset-1 col-xs-12 col-lg-4 col-sm-12">
          <h3 class="header" style="font-color:maroon;text-align:center;font-size:30px;">Leave a Message</h3>
            <hr width="20%" align="center" />
            <br/>
          <form class="form-horizontal" action="contact.php" method="post">
            <div class="form-group">
                <label for="name" class="control-label">Name*</label>
              <div >
                <input class="form-control" type="text" placeholder="Name" id="name" name="name" required/>
              </div>
            </div>
            <div class="form-group">
                <label for="email" class="control-label">E-Mail*</label>
              <div >
                <input class="form-control" type="text" placeholder="E-Mail Id" id="email" name="email" required/>
              </div>
            </div>
            <div class="form-group">
                <label for="email" class="control-label">Subject*</label>
              <div>
                <input class="form-control" type="text" placeholder="Subject" id="subject" name="subject" required/>
              </div>
            </div>
            <div class="form-group" >        
              <label for="comment" class="control-label">Message</label>
              <div >
                <textarea class="form-control" row="5" type="message" placeholer="Write your Message here!!" id="comment" name="message"></textarea>
              </div>
            </div>
            <div class="form-group">        
              <div>
                <button type="submit" class="btn btn-success">Send Message</button>
                <button type="reset" class="btn btn-warning">Reset</button>
              </div>
          </form>
        </div>
      </div>
    </div>


	<!-- Google Map -->
	    <div class="container-fluid wow fadeInUp delay-02s col-lg-12 col-md-12 col-sm-12 col-xg-12">
        <br/><br/>
		    <h3 style="text-align:center;">Find us on Google Maps</h3><hr width="30%" align="center"/><br/><br/>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3718.5489569646165!2d81.60284041466524!3d21.24972718557445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a28dde213f66723%3A0x21543965c50c43c7!2sNational+Institute+Of+Technology+Raipur!5e0!3m2!1sen!2sin!4v1518869390367" width="100%" height="450" frameborder="1" style="border:0" allowfullscreen></iframe>
		  </div>

<br/><br/><br/>
      
      <div class="footer-bottom">
        <div class="container-fluid">
            <div class="text" style="font-size:20px;color:white;text-align:center;">
                <p>Copyright &copy; 2018, <span style="color:maroon;">Udaan</span> | All Right Reserved.</p>
            </div>
        </div><!-- /.container -->
      </div>
     
    

<!--bottom part end-->

<!--modal signup-->

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sign-Up</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="post">
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
          <div class="col-sm-offset-4 col-sm-2">
            <button type="submit" class="btn btn-success">Register</button>
          </div>
          <div class="col-sm-2">
            <button type="reset" class="btn btn-warning">Reset</button>
          </div>
        </div>
      </form>
      <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>


<!--modal login-->
  <div id="myModal2" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Log-In</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" method="post">
            <div class="form-group">
              <label for="email" class="control-label col-sm-4">User Name</label>
              <div class="col-sm-4"><input class="form-control" type="text" placeholder="User Name" id="email" name="username" required/></div>
            </div>
            <div class="form-group">
              <label for="password" class="control-label col-sm-4">Password:</label>
              <div class="col-sm-4">
              <input class="form-control" type="password" placeholer="Password" id="password" name="password" required/></div>
            </div>
            <div class="form-group">        
              <div class="col-sm-offset-4 col-sm-4">
                <div class="checkbox">
                  <label><input type="checkbox" name="remember"> Remember me</label>
                </div>
              </div>
            </div>
            <div class="form-group">        
              <div class="col-sm-offset-4 col-sm-2">
                <button type="submit" class="btn btn-success">Log-in</button>
              </div>
              <div class="col-sm-2">
                <button type="reset" class="btn btn-warning">Reset</button>
              </div>
            </div>
          </form>
        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>








<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="material-icons" style="font-size:20px;color:white">arrow_upward</i></button>
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
  </body>
</html>
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="photos\udaan1.jpg" type="image/x-icon">
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="fonts/flaticon.css" />
    <link rel="stylesheet" href="css/custom.css"/>
    <link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>
    <link rel="stylesheet" href="slider/css/slider.css">
    <link rel="stylesheet" href="slider/css/slider.css">
      <script src="jquery.js"></script>
    <script src="bootstrap.js"></script>
    <style>

.active {
  background-color: #717171;
}


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

                .badge-pill
                {
                  height:140px;
                  width:510px;
                  padding-top:40px; 
                  background-color: steelblue;
                  text-color:darkblue;
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
                  <li role="presentation">
                      <a class="dropdown-toggle" type="button" href="advocacy.php" data-toggle="dropdown">Advocacy <span class="caret"></span></a>
                      <ul class=" dropdown-menu">
                        <li role="presentation"><a href="legal_advocacy.php" role="presentation">Legal Advocacy</a></li>
                        <li role="presentation"><a href="policy_advocacy.php" role="presentation">Policy Advocacy</a></li>
                        <li role="presentation"><a href="media_advocacy.php" role="presentation">Media Advocacy</a></li>
                      </ul>
                  </li>
                  <li role="presentation"><a type="button"  data-toggle="modal" data-target="#myModal3">Contact us</a></li>
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

  <br/>
<br/>

<div class="container-fluid">
  <h3 style="font-size:50px;color:teal;font-family:'Berkshire Swash';text-align:center;">Legal Advocacy</h3>
</div>

<br/>
<br/>
<br/>
<br/>


<div class="container-fluid">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <br/><br/>
      <img class="img-responsive" src="photos\legal.jpg" alt="advocacy"/>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <br/><br/>
      <ol>
        <li style="color:maroon;font-size:25px;font-family:Verdana;"><i class="material-icons" style="font-color:teal;font-size:30px;">subdirectory_arrow_right</i> WP 1467/04 in Delhi High Court for using video conferencing to record evidence of victims.
        </li>
        <li style="color:maroon;font-size:25px;font-family:Verdana;"><i class="material-icons" style="font-color:teal;font-size:30px;">subdirectory_arrow_right</i> PIL 56/2004 in Supreme Court for comprehensive victim protection protocol
        </li>
        <li style="color:maroon;font-size:25px;font-family:Verdana;"><i class="material-icons" style="font-color:teal;font-size:30px;">subdirectory_arrow_right</i>

         WP(Crl) 3/2015 in Supreme Court about circulation of rape videos and need for holistic mechanism to curb it.
        </li>
      </ol>
    </div>
  </div>

<br/>
<br/>
<br/>
<br/>


    


 <h1 style="color:red;">For legal support</h1>
 <form action="support.php" method="post" enctype="multipart/form-data">
  <fieldset>
    <legend>Personal Information:-</legend>
    <div class="form-group">
    <label for="Name">NAME</label>
    <input type="text" class="form-control" id="name" required>
  </div>
  <div class="form-group">
    <label for="age">AGE</label>
    <input type="number" class="form-control" id="age" required>
  </div>
  <div class="form-group">
    <label for="place">Where are you from?</label>
    <input type="text" class="form-control" id="place" placeholder="complete address">
  </div>
  <div class="form-group">
    <label for="tell about life">Tell us about your life:</label>
    <input type="text" class="form-control" id="tell about life" required>
  </div>
  <div class="form-group">
    <label for="help">How can we help you?</label>
    <input type="text" class="form-control" id="help" required>
  </div>
  <div class="form-group">
    <label for="expectations">Your expectations from us?</label>
    <input type="email" class="form-control" id="expectations">
  </div>
  <div class="form-group">
    <label for="ID proof">Identity proof</label>
    <input type="file" class="form-control" name="image" id="image">
  </div>
  <div class="form-group">
    <label for="documents">Legal documents of your case(if any?)</label>
    <input type="file" class="form-control" name="fileTo" id="fileTo">
  </div>
   <div class="form-group">
    <label for="email">E-mail:</label>
    <input type="email" class="form-control" id="email">
  </div><div class="form-group">
    <label for="contact no.">Contact No:</label>
    <input type="number" class="form-control" id="contact no.">
  </div>
</fieldset>
<input type="submit" value="submit"/>
<input type="reset" value="reset"/>
</form>
</div>
</div>

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
                  <li><a type="button"  data-toggle="modal" data-target="#myModal3" style="font-size:25px;color:teal;font-family:'Berkshire Swash';">Contact us</a></li>    
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


<br/>
     <div class="footer-bottom">
        <div class="container">
            <div class="text" style="font-size:20px;color:black;text-align:center;">
                <p>Copyright &copy; 2018, <span style="color:maroon;">Udaan</span> | All Right Reserved.</p>
            </div>
        </div><!-- /.container -->
    </div>
</body>
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


    <!--modal Contact us-->
  <div id="myModal3" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h1 style="font-size:30px;color:teal;font-family:'Berkshire Swash';text-align:center;" class="modal-title">Contact Us</h1>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
      <div>
          <div>
              <h3 style="font-size:30px;color:teal;font-family:'Berkshire Swash';"><i class="material-icons" style="font-size:30px">mail_outline</i> Email Us</h3><br/>
              <span style="font-size:20px;color:maroon;">
                udaan@gmail.com
              </span>
          </div>
          <div>
              <h3 style="font-size:30px;color:teal;font-family:'Berkshire Swash';"><i class="material-icons" style="font-size:30px">call</i> Phone No.</h3>
              <br/>
              <span style="font-size:20px;color:maroon;">
                +91 96 94 887366,<br/>
                +91 76 97 518432
              </span>
          </div>
          <div >
              <h3 style="font-size:30px;color:teal;font-family:'Berkshire Swash';"><i class="material-icons" style="font-size:30px">place</i> Address</h3>
              <br/>
              <span style="font-size:20px;color:maroon;"> NIT Raipur,
                      G.E. Road<br/>
                      Raipur (City),
                      Raipur (District),<br/>
                      Chhattisgarh State,<br/> India PIN: 492015</span>
          </div>
      </div>
  </div>
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
</html>
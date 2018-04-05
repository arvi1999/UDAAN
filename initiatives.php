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
    <title>Initiatives | Udaan</title>
    <style>
* {
    box-sizing: border-box;
}

body {
    background-color: #f1f1f1;
    padding: 20px;
    font-family: Arial;
}

/* Center website */
.main {
    max-width: 1000px;
    margin: auto;
}

h1 {
    font-size: 50px;
    word-break: break-all;
}

.row {
    margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
    padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
    float: left;
    width: 25%;
}

/* Clear floats after rows */ 
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Content */
.content {
    background-color: white;
    padding: 10px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
    .column {
        width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column {
        width: 100%;
    }
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

</style>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="photos\udaan1.jpg" type="image/x-icon">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="bootstrap.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="bootstrap.css" />
  <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>
	<script src="jquery.js"></script>
    <script src="bootstrap.js"></script>
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
                  <li role="presentation"><a type="button"  data-toggle="modal" data-target="#myModal3" >Contact us</a></li>
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

  <div class="container-fluid">
  <br/><br/><h1 style="text-align:center;font-size:40px;color:teal;font-family:'Berkshire Swash'">Initiatives</h1></div><br/><br/><br/>

  <!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column">
    <div class="content">
      <img src="photos\nukkad.jpg" alt="Nukkad" style="width:100%">
      <h3>Nukkad Natak</h3>
      <p style="font-color:maroon;font-size:20px;">Through this using college Dramactics Club we try to generate awareness among people. </p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="photos\health.jpg" alt="Health Check up" style="width:100%">
      <h3>Free Health Checkup camp</h3>
      <p style="font-color:maroon;font-size:20px;">Frequently we set up free health checkup camp in remote areas for the welfare of those people.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="photos\tafree.jpg" alt="tafree" style="width:100%">
      <h3>Tafree</h3>
      <p style="font-color:maroon;font-size:20px;">At every weekend, we try to organise a recreational activity for families where chaildren and adults can actively paritcipate and rejoice their moments.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="photos\charity.jpg" alt="Charity" style="width:100%">
      <h3>Run Charity</h3>
      <p style="font-color:maroon;font-size:20px;">At the end of Every month from the saving of this organization, we try to generate money for the needy people where others can also join.</p>
    </div>
  </div>
</div>

<br/>
<br/>
<hr width="75%" align="center"/>
     <div class="footer-bottom">
        <div class="container">
            <div class="text" style="font-size:20px;color:black;text-align:center;">
                <p>Copyright &copy; 2018, <span style="color:maroon;">Udaan</span> | All Right Reserved.</p>
            </div>
        </div>
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
  </body>
  </html>

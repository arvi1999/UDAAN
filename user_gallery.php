<?php
  session_start();
  if(!isset($_SESSION['username'])) 
    header('location:http://localhost/udaan/login.php');
?>

<!doctype html>
<html>
  <head>
    <title>Gallery | Udaan</title>
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
    
    <a class="navbar-brand" href="user_index.php" ><img src="photos\udaan1.jpg" style="width:30px;height;30px;"/></a></div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav" >
    <li ><a href="user_index.php"style="color:white;font-weight:bold;font-size:18px;"><i class="material-icons" style="font-size:18px">home</i>Home</a></li>
    <li><a href="user_initiatives.php" style="color:white;font-weight:bold;font-size:18px;">Initiatives</a></li>
    <li><a href="user_events.php" style="color:white;font-weight:bold;font-size:18px;">Events</a></li>
    <li class="active"><a href="user_gallery.php" style="color:white;font-weight:bold;font-size:18px;">Gallery</a></li>
    <li><a href="user_disscussion.php" style="color:white;font-weight:bold;font-size:18px;">Discussion</a></li>
    <li><a href="user_advocacy.php" style="color:white;font-weight:bold;font-size:18px;">Advocacy</a></li>
    <li><a href="user_contactus.php" style="color:white;font-weight:bold;font-size:18px;">Contact us</a></li>
    <li><a href="user_donate.php" style="color:white;font-weight:bold;font-size:18px;">Donate Now</a></li>
    <li><a href="user_about.php" style="color:white;font-weight:bold;font-size:18px;">About us</a></li>
  </ul>
  <ul class="nav navbar-nav navbar-right">
        <li>
          <div class="dropdown">
              <button  class="btn btn-default dropdown-toggle" style="margin-top:8px;margin-right:20px" data-toggle="dropdown">Hello, <?php echo $_SESSION['username']?> <span class="caret"></span></button>
                  <ul class=" dropdown-menu">
            <li><a href="logout.php"><i class="fa fa-sign-out" style="font-size:18px;color:red;"></i> Log-Out</a></li>
          </ul>
      </div>
    </li>
    </ul></div>
    </div></div>
    </nav>
  </div></div>

  <div class="container-fluid">
  <br/><br/><h1 style="text-align:center;">Gallery</h1></div><br/><br/><br/>
  </div>

  <!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column">
    <div class="content">
      <img src="gallery\a4.jpg" alt="Mountains" style="width:100%">
      <h3>Women Empowerment</h3>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="gallery\a1.jpg" alt="Lights" style="width:100%">
      <h3>International Women Day</h3>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="gallery\a2.jpg" alt="Nature" style="width:100%">
      <h3>Skills Developement</h3>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="gallery\a5.png" alt="Mountains" style="width:100%">
      <h3>Blood Donation Camp</h3>
    </div>
  </div>
<!-- END GRID -->
</div>

<div class="content">
  <img src="gallery\a3.jpg" alt="Bear" style="width:100%">
  <h3>Self Reliability</h3>
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

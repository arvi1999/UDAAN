<?php
  session_start();
  if(!isset($_SESSION['username'])) 
    header('location:http://localhost/udaan/login.php');
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
    <link rel="stylesheet" href="slider/css/slider.css">
      <script src="jquery.js"></script>
    <script src="bootstrap.js"></script>
    <style>

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 3.0s;
  animation-name: fade;
  animation-duration: 3.0s;
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
                  width:540px;
                  padding-top:40px; 
                  background-color: steelblue;
                  text-color:white;
                } 
            
    </style>
    
  </head>
  <body>
    <!--top part-->

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
      <li><a href="user_index.php" style="color:white;font-weight:bold;font-size:18px;"><i class="material-icons" style="font-size:18px">home</i>Home</a></li>
      <li><a href="user_initiatives.php" style="color:white;font-weight:bold;font-size:18px;">Initiatives</a></li>
      <li><a href="user_events.php" style="color:white;font-weight:bold;font-size:18px;">Events</a></li>
      <li><a href="user_gallery.php" style="color:white;font-weight:bold;font-size:18px;">Gallery</a></li>
      <li><a href="user_discussion.php" style="color:white;font-weight:bold;font-size:18px;">Discussion</a></li>
      <li class="active"><a href="user_advocacy.php" style="color:white;font-weight:bold;font-size:18px;">Advocacy</a></li>
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
      <div class="jumbotron" >
        <img class="img-responsive" src="advocacy.png" alt="advocacy"/>
        <br/>
        <div class="container-fluid"><div class="jumbotron">
        <h2> INTRODUCTION</h2></div>
        </div>
        <hr/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <div class="row">
          <div class="col-sm-5">
            <img class="img-responsive" src="advocacy1.png" alt="stat" >
          </div>
          <div class="col-sm-7">
            <img class="img-responsive" src="advocacy2.png" alt="stat2">
            <br/>
            <br/>
            <br/>
            <br/>
          </div>
        </div>
      </div>
     <div class="col-md-4 col-sm-12 col-xs-12">
     <h2><a href="policy-advocacy.html">Policy Advocacy
</a></h2>   
     </div><!--col-md-4 col-sm-12 col-xs-12-->
      <div class="col-md-4 col-sm-12 col-xs-12">
     <h2><a href="legal-advocacy.html">Legal Advocacy
</a></h2>   
     </div><!--col-md-4 col-sm-12 col-xs-12-->
      <div class="col-md-4 col-sm-12 col-xs-12">
     <h2><a href="media-advocacy.html">Media Advocacy</a></h2>   
     </div><!--col-md-4 col-sm-12 col-xs-12-->

 <!--Footer Bottom-->
     <br/><hr width="75%" align="center"/>
     <div class="footer-bottom">
        <div class="container">
            <div class="text" style="font-size:20px;color:black;text-align:center;">
                <p>Copyright &copy; 2017, <span style="color:maroon;">Udaan</span> | All Right Reserved.</p>
            </div>
        </div><!-- /.container -->
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

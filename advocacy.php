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
      
        <a class="navbar-brand" href="udaan_index.php" ><img src="photos\udaan1.jpg" style="width:30px;height;30px;"/></a></div>
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav" >
      <li><a href="udaan_index.php" style="color:white;font-weight:bold;font-size:18px;"><i class="material-icons" style="font-size:18px">home</i>Home</a></li>
      <li><a href="initiatives.php" style="color:white;font-weight:bold;font-size:18px;">Initiatives</a></li>
      <li><a href="events.php" style="color:white;font-weight:bold;font-size:18px;">Events</a></li>
      <li><a href="gallery.php" style="color:white;font-weight:bold;font-size:18px;">Gallery</a></li>
      <li><a href="discussion.php" style="color:white;font-weight:bold;font-size:18px;">Discussion</a></li>
      <li class="active"><a href="advocacy.php" style="color:white;font-weight:bold;font-size:18px;">Advocacy</a></li>
      <li><a href="contactus.php" style="color:white;font-weight:bold;font-size:18px;">Contact us</a></li>
      <li><a href="donate.php" style="color:white;font-weight:bold;font-size:18px;">Donate Now</a></li>
      <li><a href="about.php" style="color:white;font-weight:bold;font-size:18px;">About us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="loginform.php" style="color:white;font-weight:bold;font-size:18px;"><i class="material-icons" style="font-size:18px">person</i> Log-in</a></li>
      <li><a href="registrationform.php" style="color:white;font-weight:bold;font-size:18px;"><i class="material-icons" style="font-size:18px">person_add</i> Sign-up</a></li>
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
     <h2><a href="policy_advocacy.php">Policy Advocacy
</a></h2>   
     </div><!--col-md-4 col-sm-12 col-xs-12-->
      <div class="col-md-4 col-sm-12 col-xs-12">
     <h2><a href="legal_advocacy.php">Legal Advocacy
</a></h2>   
     </div><!--col-md-4 col-sm-12 col-xs-12-->
      <div class="col-md-4 col-sm-12 col-xs-12">
     <h2><a href="media_advocacy.html">Media Advocacy</a></h2>   
     </div><!--col-md-4 col-sm-12 col-xs-12-->

     <br/><br/><br/><hr width="75%" align="center"/>
     <div class="footer-bottom">
        <div class="container">
            <div class="text" style="font-size:20px;color:black;text-align:center;">
                <p>Copyright &copy; 2017, <span style="color:maroon;">Udaan</span> | All Right Reserved.</p>
            </div>
        </div><!-- /.container -->
    </div>
     
     
</body>
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
    </html>

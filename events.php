<!doctype html>
<html>
  <head>
    <title>Events | Udaan</title>
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
    <style>
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
    <li ><a href="udaan_index.php"style="color:white;font-weight:bold;font-size:18px;"><i class="material-icons" style="font-size:18px">home</i>Home</a></li>
    <li><a href="initiatives.php" style="color:white;font-weight:bold;font-size:18px;">Initiatives</a></li>
    <li class="active"><a href="events.php" style="color:white;font-weight:bold;font-size:18px;">Events</a></li>
    <li><a href="gallery.php" style="color:white;font-weight:bold;font-size:18px;">Gallery</a></li>
    <li><a href="discussion.php" style="color:white;font-weight:bold;font-size:18px;">Discussion</a></li>
    <li><a href="advocacy.php" style="color:white;font-weight:bold;font-size:18px;">Advocacy</a></li>
    <li><a href="contactus.php" style="color:white;font-weight:bold;font-size:18px;">Contact us</a></li>
    <li><a href="donate.php" style="color:white;font-weight:bold;font-size:18px;">Donate Now</a></li>
    <li><a href="about.php" style="color:white;font-weight:bold;font-size:18px;">About us</a></li>
  </ul>
  <ul class="nav navbar-nav navbar-right">
      <li><a href="login.php" style="color:white;font-weight:bold;font-size:18px;"><i class="material-icons" style="font-size:18px">person</i> Log-in</a></li>
      <li><a href="signup.php" style="color:white;font-weight:bold;font-size:18px;"><i class="material-icons" style="font-size:18px">person_add</i> Sign-up</a></li>
    </ul></div>
    </div></div>
    </nav>
  </div></div>

  <div class="container-fluid">
  <br/><br/><h1 style="text-align:center;">Upcoming Events</h1></div><br/><br/><br/>
  </div>

  <div class="container-fluid">
      <div class="jumbotron " style="background-color:khaki;">
        <div class="col-sm-3">
          <h3 style="font-color:maroon;font-size:25px;">Blood Donation Camp</h3>
          </div>
          <div class="col-sm-3">
          <h3 style="font-color:maroon;font-size:25px;">Free Health Check-up</h3>
          </div>
          <div class="col-sm-3">
          <h3 style="font-color:maroon;font-size:25px;">Eye Check-up</h3>
          </div>
          <div class="col-sm-3">
          <h3 style="font-color:maroon;font-size:25px;">Art & Craft</h3>
          </div>
          <p></p>
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

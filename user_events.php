<?php
  session_start();
  if(!isset($_SESSION['username'])) 
    header('location:http://localhost/udaan/events.php');
?>

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
  <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>
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
                <a href="user_index.php" style="font-size:40px;color:teal;font-family:'Berkshire Swash'"><img src="photos\udaan1.jpg" style="width:70px;height:70px;"/> Udaan</a>
              </div>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <div class="menu" >
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation"><a href="user_index.php"><i class="material-icons" style="font-size:18px">home</i>Home</a></li>
                  <li role="presentation"><a href="user_initiatives.php" >Initiatives</a></li>
                  <li role="presentation"><a href="user_events.php" >Events</a></li>
                  <li role="presentation"><a href="user_gallery.php" >Gallery</a></li>
                  <li role="presentation"><a href="user_discussion.php">Discussion</a></li>
                  <li role="presentation">
                      <a class="dropdown-toggle" type="button" href="advocacy.php" data-toggle="dropdown">Advocacy <span class="caret"></span></a>
                      <ul class=" dropdown-menu">
                        <li role="presentation"><a href="user_legal.php" role="presentation">Legal Advocacy</a></li>
                        <li role="presentation"><a href="user_policy.php" role="presentation">Policy Advocacy</a></li>
                        <li role="presentation"><a href="user_media.php" role="presentation">Media Advocacy</a></li>
                      </ul>
                  </li>
                  <li role="presentation"><a type="button"  data-toggle="modal" data-target="#myModal3" >Contact us</a></li>
                  <li role="presentation"><a href="user_donate.php">Donate Now</a></li>
                  <li role="presentation"><a href="user_stories.php" >Stories</a></li>
                  <li role="presentation"><a href="user_about.php" >About us</a></li>
                  <li>
                    <div class="dropdown">
                      <button  class="btn btn-default dropdown-toggle" style="margin-top:8px;margin-right:20px" data-toggle="dropdown">Hi,  <?php echo $_SESSION['username']?> <span class="caret"></span></button>
                      <ul class=" dropdown-menu">
                        <li><a href="logout.php" role="presentation"><i class="fa fa-sign-out" style="font-size:18px;color:red;"></i> Log-Out</a></li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
    </div>
  </header>


  <div class="container-fluid">
  <br/><br/><h1 style="text-align:center;font-size:40px;color:teal;font-family:'Berkshire Swash'">Upcoming Events</h1></div><br/><br/><br/>
  </div>

  <!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="col-md-3 col-xs-12 col-lg-3 col-sm-6">
    <div class="content">
      <img src="photos\blood.jpg" alt="Blood donation camp" style="width:100%">
      <h3>Blood Donation Camp</h3>
      <p style="font-color:maroon;font-size:20px;">“Bring a life back to power. Make blood donation your responsibility”</p>
    </div>
  </div>
  <div class="col-md-3 col-xs-12 col-lg-3 col-sm-6">
    <div class="content">
    <img src="photos\health.jpg" alt="Health Check up" style="width:100%">
      <h3>Free Health Checkup Camp</h3>
      <p style="font-color:maroon;font-size:20px;">Frequently we set up free health checkup camp in remote areas for the welfare of those people.</p>
    </div>
  </div>
  <div class="col-md-3 col-xs-12 col-lg-3 col-sm-6">
    <div class="content">
    <img src="photos\eye.jpg" alt="Eye check up" style="width:100%">
      <h3>Free Eye Check Up</h3>
      <p style="font-color:maroon;font-size:20px;">Frequently we set up free Eye checkup camp in remote areas for the welfare of those people.</p>
    </div>
  </div>
  <div class="col-md-3 col-xs-12 col-lg-3 col-sm-6">
    <div class="content">
    <img src="photos\art.jpg" alt="Art & Craft" style="width:100%">
      <h3>Art & Craft</h3>
      <p style="font-color:maroon;font-size:20px;">Encourage the women artist by teaching them painting, drawing, scrapbooking and more.</p>
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

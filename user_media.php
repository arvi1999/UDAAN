<?php
  session_start();
  if(!isset($_SESSION['username'])) 
    header('location:http://localhost/udaan/media_advocacy.php');
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
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>
    <link rel="stylesheet" href="slider/css/slider.css">
      <script src="jquery.js"></script>
    <script src="bootstrap.js"></script>
    <style>

.active {
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
    <!--top part-->
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

<br/>
<br/>

<div class="container-fluid">
  <h3 style="font-size:50px;color:teal;font-family:'Berkshire Swash';text-align:center;">Media Advocacy</h3>
</div>

<br/>
<br/>
<br/>
<br/>

<div class="container-fluid">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <br/><br/>
      <img class="img-responsive" src="photos\media.jpg" alt="advocacy"/>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <br/><br/>
      <ol>
        <li style="color:maroon;font-size:25px;font-family:Verdana;"><i class="material-icons" style="font-color:teal;font-size:30px;">subdirectory_arrow_right</i> Blogging and using social media to create public opinion on sex trafficking and sex crimes.
        </li>
        <li style="color:maroon;font-size:25px;font-family:Verdana;"><i class="material-icons" style="font-color:teal;font-size:30px;">subdirectory_arrow_right</i> Short Films and documentaries to sensitize communities on various aspects of sex trafficking and sex crime.
        </li>
        <li style="color:maroon;font-size:25px;font-family:Verdana;"><i class="material-icons" style="font-color:teal;font-size:30px;">subdirectory_arrow_right</i>

         Collaborating with television channels to create mass awakening and critical consciousness on the impact of sex trafficking.
        </li>
        <li style="color:maroon;font-size:25px;font-family:Verdana;"><i class="material-icons" style="font-color:teal;font-size:30px;">subdirectory_arrow_right</i> Media Partners to support campaigns or specific issue-based intervention
        </li>
        <li style="color:maroon;font-size:25px;font-family:Verdana;"><i class="material-icons" style="font-color:teal;font-size:30px;">subdirectory_arrow_right</i> Feature films to reach out to masses to awaken them regarding dangers of trafficking and inspiring them to take positive action.
        </li>
      </ol>
    </div>
  </div>

<br/>
<br/>
<br/>
<br/>

<div>
  <h3 style="color:teal;font-size:35px;font-family:Verdana;margin-left:20px;">So Far...</h3>
  <ol>
    <li style="color:green;font-size:25px;font-family:Verdana;"><i class="material-icons" style="font-color:teal;font-size:30px;">subdirectory_arrow_right</i>
      #ShameTheRapist campaign was spearheaded on the social media.
    </li>
    <li style="color:green;font-size:25px;font-family:Verdana;"><i class="material-icons" style="font-color:teal;font-size:30px;">subdirectory_arrow_right</i>
      Swaraksha Campaign was done in collaboration with several television channels.
    </li>
  </ol>
</div>

<br/>
<br/>
<br/>
<br/>


  <div class="container-fluid">
    <div class="col-sm-12 col-xs-12 col-lg-4 col-md-4" style="text-align:center;">
      <br/><br/>
      <a href="policy_advocacy.php" style="font-size:35px;color:teal;font-family:'Berkshire Swash';">Policy Advocacy</a>
    </div>
    <div class="col-sm-12 col-xs-12 col-lg-4 col-md-4" style="text-align:center;">
      <br/><br/>
      <a href="media_advocacy.php" style="font-size:35px;color:teal;font-family:'Berkshire Swash';text-align:center;">Media Advocacy</a>
    </div>
    <div class="col-sm-12 col-xs-12 col-lg-4 col-md-4" style="text-align:center;">
      <br/><br/>
      <a href="legal_advocacy.php" style="font-size:35px;color:teal;font-family:'Berkshire Swash';text-align:center;">Legal Advocacy</a>
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
     
     <!--Footer Bottom-->
     <br/>
     <div class="footer-bottom">
        <div class="container">
            <div class="text" style="font-size:20px;color:white;text-align:center;">
                <p>Copyright &copy; 2017, <span style="color:maroon;">Udaan</span> | All Right Reserved.</p>
            </div>
        </div><!-- /.container -->
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
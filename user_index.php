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
	  <li class="active"><a href="user_index.php"style="color:white;font-weight:bold;font-size:18px;"><i class="material-icons" style="font-size:18px">home</i>Home</a></li>
	  <li><a href="user_initiatives.php" style="color:white;font-weight:bold;font-size:18px;">Initiatives</a></li>
	  <li><a href="user_events.php" style="color:white;font-weight:bold;font-size:18px;">Events</a></li>
	  <li><a href="user_gallery.php" style="color:white;font-weight:bold;font-size:18px;">Gallery</a></li>
	  <li><a href="user_discussion.php" style="color:white;font-weight:bold;font-size:18px;">Discussion</a></li>
	  <li><a href="user_advocacy.php" style="color:white;font-weight:bold;font-size:18px;">Advocacy</a></li>
	  <li><a href="user_contactus.php" style="color:white;font-weight:bold;font-size:18px;">Contact us</a></li>
	  <li><a href="user_donate.php" style="color:white;font-weight:bold;font-size:18px;">Donate Now</a></li>
    <li><a href="stories.php" style="color:white;font-weight:bold;font-size:18px;">stories</a></li>
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
    </ul>
  </div>
	  </div></div>
    </nav>
	</div></div>
	<!--top part end-->

	<!--<div class="slideshow container-fluid">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="download3.jpg" class="img-responsive" style="width:100%;height:200px">
  <div class="text">skill development</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="download2.jpg" class="img-responsive" style="width:100%;height:200px">
  <div class="text">Happy faces</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="download1.jpg" class="img-responsive" style="width:100%;height:200px">
  <div class="text">self-reliable</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">4/ 4</div>
  <img src="download4.jpg" style="width:100%;height:200px">
  <div class="text">Girl's Education</div>
</div>
-->

	<!--slides-->
	<div class="container-fluid">
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
		    <h3>Girl's Education</h3>
		  </div>
		</div>
		<div class="item">

		  <img src="acid.jpg" alt="pic_2"/>
		  <div class="carousel-caption">
		    <h3 >Happy Faces</h3>
		
		  </div>
		</div>
		<div class="item">
		  <img src="working.jpg" alt="pic_3"/>
		  <div class="carousel-caption">
		    <h3>Self Reliability</h3>
		  </div>
		</div>
		<div class="item">
		  <img src="download3.jpg" alt="pic_4"/>
		  <div class="carousel-caption">
		    <h3>Skill Developement</h3>
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
	</div></div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
</div>

<div class="container-fluid">
	<div class="jumbotron" style="background-color:steelblue; ">
		<marquee class="marq">

    <a style="color:maroon;" href="#"></a> 
    </marquee></div>
</div>
<div class="container-fluid">
<div class="jumbotron" style="height:700px;"> 
<div class="row">
	<div class="col-sm-6 ">
		<h3 style=" color:maroon;font-size:30px;">About Udaan-</h3>
		<hr/>
		<p text-align="right-justified">UDAAN- a pioneering anti-trafficking organization working on the issue of sex trafficking and sex crime.Udaan works on the five pillars of Prevention, Protection, Rescue, Rehabilitation & Reintegration. It aims to raise the voice of the women against the discrimination and helps them from providing advocacy for social justice to providing neceessary skill training for making them self-reliable.This NGO provides the opportunity to education to those girls who are sold as sex-slaves by their parents.It works in collboration with government's skill india and digital india program.

</p>
<img src="web.png" style="width:92%" class="img-responsive"/>
</div>
<div class="col-sm-6">
	
	<br/>
	<div class="row" style="background-color: skyblue;position:relative;bottom:19px;right:30px;height:95%"></div>
	<br/>

		<div style="border:2px solid skyblue;height:300px;width:600px;border-radius:5px; position:relative; top:30px">
			<h3 style="text-align:center; color:maroon;font-size:30px;">Updates</h3><hr/>
	<marquee direction="up" class="marq">
		<br/>
    <a id="a1" style="color:steelblue;padding-left:10px;" href="#"> 20/3/18-Nukkad Natak by the students of NIT Raipur on Domestic Violence </a> <br/><br/>
    <a id="a2" style="color:steelblue;padding-left:10px;" href="#"> 27/3/18-Fashion show for acid victims </a>
    </marquee>
</div>
</div>
</div>
</div>

	<!--bottom part-->
		<div class="container-fluid">
			<br/>
			<br/>
			<br/>
			<br/>
			<h3 style="text-align:center;">Be social with us</h3><hr width="40%" align="center" /><br/>
	<div class="col-sm-offset-4 col-sm-1 col-xs-6"><a href="https://www.facebook.com/Äŗvïņđ-Saini-1862569494027379" id="i1" class="fa fa-facebook "></a></div>
	  <div class="col-sm-1 col-xs-6"><a href="https://twitter.com/Arvi_1999" class="fa fa-twitter " id="i1"></a></div>
	  <div class="col-sm-1 col-xs-6"><a href="https://www.linkedin.com/in/arvind-saini-335556124/" id="i1" class="fa fa-linkedin "></a></div>
	  <div class="col-sm-1 col-xs-6"><a href="https://www.instagram.com/love_arvind/"  id="i1" class="fa fa-instagram "></a></div>
	  	</div>
	<!-- Google Map -->
	<br/><br/><br/><br/>
	    <div class="container-fluid wow fadeInUp delay-02s">
		<h3 style="text-align:center;">Find us on Google Maps</h3><hr width="30%" align="center"/><br/>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3718.5489569646165!2d81.60284041466524!3d21.24972718557445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a28dde213f66723%3A0x21543965c50c43c7!2sNational+Institute+Of+Technology+Raipur!5e0!3m2!1sen!2sin!4v1518869390367" width="100%" height="450" frameborder="1" style="border:0" allowfullscreen></iframe>
		</div>

		<br/><br/><br/>

	<!--footer-->
	<div  class="jumbotron container-fluid" style="background-color:steelblue;">
	<footer class="main-footer" >   

    <!--Widgets Section-->
    <div class="widgets-section">
        <div class="container" style="background-color:steelblue;">
            <div class="row">
                <!--Big Column-->
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="row clearfix">   
                        <!--Footer Column-->
                        <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-widget information-widget">
                            	<br/><br/><br/><br/><br/>
                            <h3 class="footer-title" style="font-size:27px;color:maroon;">Quick Links</h3><br/>
                            <div class="widget-content">
                            <ul class="list footer-menu">
                            <li ><a href="user_index.php" style="font-size:20px;color:white;">Home</a></li>
                            <li><a href="user_initiatives.php" style="font-size:20px;color:white;">Initiatives</a></li>
                            <li><a href="user_about.php" style="font-size:20px;color:white;">The Team</a></li>
                            <li><a href="user_events.php" style="font-size:20px;color:white;">Events</a></li>
                            <li><a href="user_gallery.php" style="font-size:20px;color:white;">Gallery</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Footer Column-->
                        <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-widget works-widget">
                                <div class="widget-content pad-62" style="margin-top:70px;">
                                <ul class="list footer-menu">
                                	<br/>
                                	<br/>
                                	<br/>
                                	<br/>
                                	<br/>
                                	<br/>
                                	<li><a href="user_discussion.php" style="font-size:20px;color:white;">Discussion
</a></li>
                                 <li><a href="user_advocacy.php" style="font-size:20px;color:white;"> Advocacy</a></li>
                   

                                        <li><a href="user_contactus.php" style="font-size:20px;color:white;">Contact us</a>
<!--
                            <ul class="footer-dropdown">
                            <li><a href="#"> Family Reunion</a></li>
                            <li><a href="#">Marriage</a></li>
                            <li><a href="#">Independent Living</a></li>        
                            </ul>        
-->
                            </li>    
                               <li><a href="user_about.php" style="font-size:20px;color:white;">About us</a>
<!--
                            <ul class="footer-dropdown">
                            <li><a href="#"> Legal Advocacy</a></li>
                            <li><a href="#">Policy Advocacy</a></li>
                            <li><a href="#">Media Advocacy</a></li>        
                            </ul>        
-->
                            </li>            
                                    </ul>
                            <div class="clearfix"></div>
                            <br /> <br /> <br /> <br/><br/>        
                            <a href="user_donate.php" class="thm-btn style-2" style="font-size:20px;color:khaki;"><i class="fa fa-life-ring" aria-hidden="true"></i> donate now</a>   <div class="clearfix"></div>
                            <br />             
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Big Column-->
                <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="row clearfix">
                             <!--Footer Column-->

                     <div class="footer-column col-md-8 col-sm-6 col-xs-12">
                            <div class="footer-widget information-widget">
                            	<br/>
                            	<br/>
                            	<br/>
                            	<br/>
                            	<br/>
                                <h3 class="footer-title" style="font-size:27px;color:maroon;">Quick Contact</h3><br/>
                                <div class="widget-content">
                                    <ul class="contact-info">
                                        <li style="line-height:25px;"><span style="font-size:20px;color:white;" class="fa fa-map-marker"></span><span style="font-size:20px;color:white;"> NIT Raipur,
G.E. Road<br/>
Raipur (City),
Raipur (District),<br/>
Chhattisgarh State,<br/> India PIN: 492015</span></li>
                                        <li><span class="fa fa-envelope-o" style="font-size:20px;color:white;"></span><span style="font-size:20px;color:white;"> udaan@gmail.com</span></li>
                                        <li><span class="fa fa-phone" style="font-size:20px;color:white;"></span><span style="font-size:20px;color:white;"> +91 96 94 887366</span></li>
                                    </ul>
                              
    	 
                                </div>
                            </div>
                        </div>
                        <!--Footer Column-->
                        </div>
                </div>
                
             </div>
         </div>
     </div>
     
     <!--Footer Bottom-->
     <br/><hr width="75%" align="center"/>
     <div class="footer-bottom">
        <div class="container">
            <div class="text" style="font-size:20px;color:white;text-align:center;">
                <p>Copyright &copy; 2018, <span style="color:maroon;">Udaan</span> | All Right Reserved.</p>
            </div>
        </div><!-- /.container -->
    </div>
     
</footer>

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
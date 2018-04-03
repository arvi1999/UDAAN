<!doctype html>
<html>
  <head>
    <title>Log-in | Udaan</title>
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
    <li class="active"><a href="udaan_index.php"style="color:white;font-weight:bold;font-size:18px;"><i class="material-icons" style="font-size:18px">home</i>Home</a></li>
    <li><a href="initiatives.php" style="color:white;font-weight:bold;font-size:18px;">Initiatives</a></li>
    <li><a href="events.php" style="color:white;font-weight:bold;font-size:18px;">Events</a></li>
    <li><a href="gallery.php" style="color:white;font-weight:bold;font-size:18px;">Gallery</a></li>
    <li><a href="discussion.php" style="color:white;font-weight:bold;font-size:18px;">Discussion</a></li>
    <li><a href="advocacy.php" style="color:white;font-weight:bold;font-size:18px;">Advocacy</a></li>
    <li><a href="contactus.php" style="color:white;font-weight:bold;font-size:18px;">Contact us</a></li>
    <li><a href="donate.php" style="color:white;font-weight:bold;font-size:18px;">Donate Now</a></li>
    <li><a href="about.php" style="color:white;font-weight:bold;font-size:18px;">About us</a></li>
  </ul>
  <ul class="nav navbar-nav navbar-right">
      
      <li><a href="registrationform.php" style="color:white;font-weight:bold;font-size:18px;"><i class="material-icons" style="font-size:18px">person_add</i> Sign-up</a></li>
    </ul></div>
    </div></div>
    </nav>
  </div></div>

  <div class="container-fluid">
  <br/><br/><h1 style="text-align:center;">Log-in Form</h1></div><br/><br/><br/>
    <form class="form-horizontal" action="validation.php" method="post">
	  <div class="form-group">
	    <label for="email" class="control-label col-sm-4">User Name</label>
	    <div class="col-sm-4"><input class="form-control" type="text" placeholder="User Name" id="email" name="email" required/></div>
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
	<div class="form-group">
	<div class="col-sm-offset-4 col-sm-4">
	<h3>Or Create an Account
	<a href="registrationform.php">Sign-up</a></h3>
	</div></div>
	</form>
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

  
  </body>
</html>
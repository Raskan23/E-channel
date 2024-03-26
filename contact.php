<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>Contact</title>
	
	<!--link rel="stylesheet" href="css/contact.css" type="text/css"-->
	<link rel="stylesheet" href="css/styles.css">
</head>
<body background="lightblue">
	<div id="header">
		<div>
			<!--div id="logo">
				<a href="index.html"><img src="logoCopy.jpg" alt="LOGO"></a>
			</div-->
			<ul id="navigation">
				<li>
					<a href="index.php">  <b> Home </b> </a>
				</li>
				<!--li>
					<a href="about.html">About us</a>
				</li-->
				<li>
					<a href="channel.php"> <b>Registration </b> </a>
				</li>
				<li>
					<a href="patient.php"> <b>Patients Medicine  </b> </a>
				</li>
				<!--li>
					<a href="adminlog.html"><b>admin login</b></a>
				</li-->
				<li class="selected">
					<a href="contact.php"> <b>Contact us </b> </a>
				</li>
			</ul>
		</div>
	</div>
	<section class="ftco-section contact-section">
      <div class="container bg-light">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Address:</span>  Ganewalpola, Kekirawa, Sri Lanka</p>
          </div>
          <div class="col-md-3">
            <p><span>Phone:</span> <a href="tel://94762425678">+ 94762425678</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> <a href="mailto:raskhan2327@gmail.com">raskhan2327@gmail.com</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Website:</span> <a href="#">Ganewalpolachannelcenter.com</a></p>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 pr-md-5">
            <form action="login.php" method="post">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>
	
			
				
		<!--div id="footer"-->
		<div class="clearfix">
			<div id="connect">
				<a href="http://benchaneling.com/go/facebook/" target="_blank" class="facebook"></a><a href="http://bennchanneling.com/go/googleplus/" target="_blank" class="googleplus"></a><a href="http://benchanneling.com/go/twitter/" target="_blank" class="twitter"></a>
			</div>
			<p>
			<center></center>
			</p>
		</div>
	</div>
	</div>
</body>
</html>
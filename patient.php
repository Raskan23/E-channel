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
	<title>Patient Medicine</title>
	<link rel="stylesheet" href="css/patient.css" type="text/css">
</head>
<body background="2.jpg">
<div class="slider">
			
				<div class="load">
	                <div id="header">
		<div>
			<div id="logo">
				<a href="index.php"><!--img src="logoCopy.jpg" alt="LOGO"--></a>
			</div>
			<ul id="navigation">
				<li>
					<a href="index.php"> <b> Home </b></a>
				</li>
				<!--li>
					<a href="about.html">About us</a>
				</li-->
				<li>
					<a href="channel.php"><b> Registration </b></a>
				</li>
				<li class="selected">
					<a href="patient.php"><b> Patient Medicine </b></a>
				</li>
				<!--li>
					<a href="adminlog.html"><b>admin login</b></a>
				</li-->
				<li>
					<a href="contact.php"><b> Contact us </b></a>
				</li>
			</ul>
		</div>
	</div>
	<div id="contents"><br><br><br>
	
	<div id="contentsinn" class="contentsinn">
      <form  action="print_m.php" method="post" align="center">
        <h2 class="form-head"><font color="#00bfff"> GET PERSON DETAILS </font></h2>
         
            <table align="center" class="table-borderless text-center">
                <col width="40%">
                <col width="60%">
            <tr>
               <!--td class=""><label class="Input-label" for="email"><font size="4px"> P-ID </font> </label></td-->
               <td><input class="text-id" type="text" autocomplete="off" placeholder="ENTER NIC OR PATIENT ID" name="pid" required></td>
            </tr>
			<tr>
           <center>  <td> <input class="btn1" type="submit" value="Get">  </td></center> 
		   </tr>
            
			
			 
			  </table>
      </form> 
               
           	
   
	
             
        
	 
    </div>
  </div> 
 			 
		<div id="footer">
		<div class="clearfix">
			<div id="connect">
				<a href="http://echannel.com/go/facebook/" target="_blank" class="facebook"></a><a href="http://echannel.com/go/googleplus/" target="_blank" class="googleplus"></a><a href="http://wedcatering.com/go/twitter/" target="_blank" class="twitter"></a>
			</div>
			<p>
			<center> © Copyright 2021. All Rights Reserved.</center>
			</p>
		</div>
	</div>
	</div>
	</div>
	</div>
</body>
</html>
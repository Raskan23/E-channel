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
	<title>Channel </title>
	<link rel="stylesheet" href="css/channel.css" type="text/css">
</head>
<body>
<div class="slider">
			
				<div class="load">
	                <div id="header">
		<div>
			<div id="logo">
				<a href="index.php"><!--img src="logoCopy.jpg" alt="LOGO"--></a>
			</div>
			<ul id="navigation">
				<li>
					<a href="index.php"> <b>Home </b></a>
				</li>
				<!--li>
					<a href="about.html">About us</a>
				</li-->
				<li class="selected">
					<a href="channel.php"> <b>registration </b></a>
				</li>
				<li>
					<a href="patient.php"> <b>Patients Medicine  </b></a>
				</li>
				<!--li>
					<a href="adminlog.php"><b>admin login</b></a>
				</li-->
				<li>
					<a href="contact.php"> <b>Contact us </b></a>
				</li>
			</ul>
		</div>
	</div>
	
	<div id="contents" >
	
	      <br>
			<div id="contentsin" class="contentsin">
			<h1 align="center">Registration </h1>
			<form action="book.php" onsubmit="return check()" method="post">
			<table align="center" cellpadding="10" class="boderless-table tab tab2">
               <tr>
                  <td class="text-danger">Full Name</td>
                  <td><input class="form-control" type="text" placeholder="Name" name="name"  required ></td>
               </tr>
			   <tr>
                  <td class="text-danger">Age</b></td>
                  <td><input class="form-control" type="number" placeholder="Age" name="age" ></td>
               </tr>
			   <tr>
                  <td class="text-danger">Gender</b></td>
                  <td>
                     <select class="form-control" name="gender" >
                        <option name="Male" >Male</option>
                        <option name="Female" >Female</option>
                        <option name="Other" >Other</option>
						</td>
               </tr>
               <tr>
                  <td class="text-danger">Address</b></td>
                  <td><input class="form-control" type="text" placeholder="Address" name="address"  required ></td>
               </tr>
               <tr>
                  <td class="text-danger">Phone</b></td>
                  <td><input class="form-control" type="number" placeholder="Phone" name="phone"  required></td>
               </tr>
			   <tr>
                  <td class="text-danger">Date</td>
                  <td><input class="form-control" type="date" placeholder="Date" name="date"  required></td>
               </tr>
			   <tr>
                  <td class="text-danger">Pharmacy Opening Time Shedule:</td>
                  <td><b>Morning:6AM-8AM Evening:4PM-9PM</b></td>
               </tr>
			   <tr>
                  <td class="text-danger">Time</td>
                  <td><input id="time" class="form-control" type="time" placeholder="Time" name="time" required></td>
               </tr>
               <tr>
                  <td class="text-danger ">Desease type</b></td>
                  <td><input class="form-control" type="Madical type" placeholder="Madical type" name="desease"  required>
                     <!--select class="form-control"  name="Desease" value="Desease">
                        <option>Heart Problems</option>
                        <option>E.N.T</option>
                        <option>Dengue</option>
                        <option>Cancer</option>
                        <option>Dentel</option>
                        <option>V.O.G</option>
                        <option>Physiotheraphy</option>
                        <option>General</option>
                     </select-->
                  </td>
				  <tr>
                  <td class="text-danger">Doctor Detils</td>
                  <td><input class="form-control" type="text" placeholder="Dr ID" name="drid"  required><a href="#body"> <img src="dr.png" style="width:15px; height:15px;" onclick="show()"> </a></td>
               </tr>
               </tr>
               <tr class="text-center">
                <td> <center> <input class="btn-chanl" type="reset" ></center></td>
                  <td><center> <input class="btn-chanl" type="submit" > </center></td>
                  
               </tr>
			   </form>
            </table>
			</div>
		</div>

		<script>
			function check(){
				var time = document.getElementById('time').value;
				time = "01/01/2022 "+time+':00'
				var time1 = new Date(time).getHours();
				if(time1 >=6 && time1 < 8 || time1 >=16 && time1 < 21){
					return true;
				}else{
					alert('Choose time between 6 AM - 8 AM or 4 PM to 9 PM');
					return false;
				}
				return false;
				
			}
		</script>
	<div class="home-tab" id="home-tab">
	<table align="center" class="table1"  width="50%"> 
<tr class="tr1"> <th> <font size="3px" color="Red">Doctor Name </font></font> </th> <th><font size="3px" color="Red"> Special </font></font> </th> <th><font size="3px" color="Red"> Doctor ID </font></th><th> <font size="3px" color="red">Time</font> </th></tr>
<tr class="trr"> <td>Dr R.Sisil </td> <td> Eye </td> <td>sis/ey </td><td>6 A.M-8A.M & 4P.M-9P.M </td> </tr>
<tr class="tr1"> <td> Dr S.Rahan  </td> <td>V.O.G  </td>  <td> rah/vog </td><td> 6 A.M-8A.M & 4P.M-9P.M  </td></tr>
<tr class="trr"> <td> Dr Rais </td> <td> General phys</td>  <td> rai/gen </td><td> 6 A.M-8A.M & 4P.M-9P.M   </td></tr>
<tr class="tr1"> <td> Dr Aravind  </td> <td>E.N.T  </td>   <td> arv/ent </td><td> 6 A.M-8A.M & 4P.M-9P.M  </td>  </tr>
<tr class="trr"> <td> Dr Croos </td> <td> Heart special </td>  <td> crs/hrt  </td><td> 6 A.M-8A.M & 4P.M-9P.M   </td>  </tr>
<tr class="tr1"> <td>Dr Joseph  </td> <td> Dental </td>  <td> jo/den </td><td> 6 A.M-8A.M & 4P.M-9P.M   </td>  </tr>
<tr class="trr"> <td>Dr Sathya </td> <td> E.N.T </td> <td> sat/ent</td><td> 6 A.M-8A.M & 4P.M-9P.M</td> </tr>
<tr class="tr1"> <td>Dr priya </td> <td> V.O.G </td> <td>pry/vog </td><td>6 A.M-8A.M & 4P.M-9P.M</td> </tr>
<tr class="trr"> <td>Dr Aarthi </td> <td>Cancer  </td> <td> aar/can</td><td> 6 A.M-8A.M & 4P.M-9P.M</td> </tr>
<tr class="tr1"> <td> Dr Guru</td> <td> General phys </td> <td>gur/Gen </td><td>6 A.M-8A.M & 4P.M-9P.M </td> </tr>
<tr class="trr"> <td>Dr Keerthi </td> <td> General phys </td> <td> keer/Gen</td><td>6 A.M-8A.M & 4P.M-9P.M </td> </tr>

</table>
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
	<script type="text/javascript" src="java.js">
	</script>
	</div>
	</div>
</body>
</html>

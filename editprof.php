<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>Edit Profile</title>
	<link rel="stylesheet" href="css/editprof.css" type="text/css">
</head>
<body >
<h2 class="reg-head" align="center"><font> Edit Profile </font></h2>

<div id="contentsin" class="contentsin">
   <form class="pat-reg" action="register.php" method="post">
   <br>
<table align="center" cellpadding="10" class="boderless-table tab tab2" action="reg.php" method="post">
 <tr>
                  <td class="text-danger">Name</td>
                  <td><input class="form-control" type="text" placeholder="name" name="name"  required ></td>
               </tr>
			   <tr>
                  <td class="text-danger">N.I.C No</td>
                  <td><input class="form-control" type="text" placeholder="N.I.C Number" name="nic"  required></td>
               </tr>
			   <tr>
                  <td class="text-danger">ID</td>
                  <td><input class="form-control" type="text" placeholder="Patient-ID" name="id"  required ></td>
               </tr>
			   <tr>
                  <td class="text-danger">Password</b></td>
                  <td><input class="form-control" type="text" placeholder="Password" name="Password"  required ></td>
               </tr>
               <tr>
                  <td class="text-danger">Address</b></td>
                  <td><input class="form-control" type="text" placeholder="Home or hall address" name="address"  required ></td>
               </tr>
			   <tr>
                  <td class="text-danger">Gender</b></td>
                  <td>
                     <select class="form-control" name="gender" >
                        <option name="Male" >Male </option>
                        <option name="Female" >Female </option>
                        <option name="Other" >Other </option>
						</td>
               </tr>
               <tr>
                  <td class="text-danger">Age</b></td>
                  <td><input class="form-control" type="number" placeholder="Age" name="age" ></td>
               </tr>
               <tr>
                  <td class="text-danger">Phone</b></td>
                  <td><input class="form-control" type="number" placeholder="phone" name="phone"  required></td>
               </tr>
               <tr>
                  <td class="text-danger">Dr ID</b></td>
                  <td><input class="form-control" type="text" autocomplete="off" placeholder="Doctor ID" name="drid" ></td>
               </tr>
               <tr>
                  <td class="text-danger">Desease type</td>
                  <td><input class="form-control" type="text" placeholder="Desease"  name="Desease"  required></td>
               </tr>
               <tr>
                  <td class="text-danger">Medical Reciept</td>
                  <td><input class="form-control" type="file" placeholder="file" name="Reciept"  required></td>
               </tr>
               <!--tr>
                  <td class="text-danger">Name</td>
                  <td><input class="form-control" type="text" placeholder="name" required ></td>
               </tr>
			   <tr>
                  <td class="text-danger">N.I.C No</td>
                  <td><input class="form-control" type="text" placeholder="N.I.C Number"  ></td>
               </tr>
			   <tr>
                  <td class="text-danger">ID</td>
                  <td><input class="form-control" type="text" placeholder="Patient-ID" required ></td>
               </tr>
			   <tr>
                  <td class="text-danger">Password</b></td>
                  <td><input class="form-control" type="text" placeholder="New Password" required ></td>
               </tr>
               <tr>
                  <td class="text-danger">Address</b></td>
                  <td><input class="form-control" type="text" placeholder="Home or hall address" required ></td>
               </tr>
			   <tr>
                  <td class="text-danger">Gender</b></td>
                  <td>
                     <select class="form-control" name="type">
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
						</td>
               </tr>
               <tr>
                  <td class="text-danger">Age</b></td>
                  <td><input class="form-control" type="number" placeholder="Age" ></td>
               </tr>
               <tr>
                  <td class="text-danger">Phone</b></td>
                  <td><input class="form-control" type="number" placeholder="phone" required></td>
               </tr>
               <tr>
                  <td class="text-danger">Dr ID</b></td>
                  <td><input class="form-control" type="text" autocomplete="off" placeholder="Doctor ID"></td>
               </tr>
               <tr>
                  <td class="text-danger">Desease type</td>
                  <td><input class="form-control" type="text" placeholder="Desease" required></td>
               </tr>
               <tr>
                  <td class="text-danger">Medical Reciept</td>
                  <td><input class="form-control" type="file" placeholder="file" required></td>
               </tr-->
               <tr class="text-center">
                <td><center><input class="btn-sub" type="reset" value="Reset"></center></td>
                  <td><center><input class="btn-sub" type="submit" value="Submit"></center></td>
                  
               </tr>
            </table>
			</form>
			</div>
			</body>
			</html>
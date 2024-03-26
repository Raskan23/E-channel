<?php
   require ('db.php');
   if(!isset($_SESSION['ADMIN_LOGIN'])){
      header('location:adminlog.php');
      die();
   }
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>admin panel</title>
      <link href="bootstrap.min.css" rel="stylesheet">
	  
      <link href="pro.css" type="text/css" rel="stylesheet">
      <link href="sidenav.css" type="text/css" rel="stylesheet">
   </head>
   <body background color="lightblue">
   
   
      <aside id="aside">
         <p class="form-head"></p>
         <br>
         <p class="name"><br>
         
         </p>
         <br>
         <p class="link">
		    <a href="#top"><font color="red">Admin panal </font></a><br>
            <a href="register.php"><font color="red"> Register </font></a><br>
			<a href="viewPatients.php"><font color="red">Patient - Details </font></a><br>
            <a href="adminlogout.php"><font color="red">LOG OUT </font></a><br>
			
         </p>
      </aside>
	  <div class="top" id="top">
	  </div>
      <section>
         <div class="div">
            <div class="container"><br>
			<font size="6px"> <b> Welcome Admin! </b> </font> <br><br>

   </section>
</div>
</div>




   </body>
   <html>
<?php
require ('db.php');	
if(isset($_SESSION['ADMIN_LOGIN'])){
	header('location:adminpanal.php');
	die();
 }
$msg='';
if(isset($_POST['submit'])){
	$username=mysqli_real_escape_string($bd,$_POST['username']);
	$password=mysqli_real_escape_string($bd,$_POST['password']);
	$sql="select * from admin where username='$username' and password='$password'";
	$res=mysqli_query($bd,$sql);
	$count=mysqli_num_rows($res);
	if($count>0){
		$_SESSION['ADMIN_LOGIN']='yes';
		$_SESSION['ADMIN_USERNAME']=$username;
		?> 
		<script>
			window.location.href = 'adminpanal.php';
		</script>
		<?php
		die();
	}else{
		$msg="Please enter correct login details";	
	}
	
}
?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>admin</title>
	<link rel="stylesheet" href="adminlog.css" type="text/css">
</head>
<body>
<div id="header">
		<div>
			
			<ul id="navigation">
				
				<li>
					<a href="index.php">  <b> Home </b> </a>
				</li>
				
				<li>
					<a href="patient.php"> <b>Patients Medicine </b> </a>
				</li>
				
				<li >
					<a href="contact.php"> <b>Contact us </b> </a>
				</li>
			</ul>
		</div>
	</div>
	
                    <div class="login-box"> 
							<img src="user.png" class="usericon"> 
							<h2> Login  </h2>
							<form method="post">
								
								<input type="text" name="username"  placeholder="Enter Username" required>
								
								<input type="Password" name="password"  placeholder="Enter Password" required>
								<span style="color: red;"><?php echo $msg ?></span>
								 <input type="submit" name="submit" value="Login" >
								
							</form>
					</div>
					

</body>
</html>
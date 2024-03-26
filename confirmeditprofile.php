<?php
include("includes/mysqli_connection.php");
?>

<?php

	$id = mysqli_real_escape_string($db_conx,htmlspecialchars($_POST['id']));
	$Name = mysqli_real_escape_string($db_conx,htmlspecialchars($_POST['name']));
	$NIC = mysqli_real_escape_string($db_conx,htmlspecialchars($_POST['nic']));
	$PID = mysqli_real_escape_string($db_conx,htmlspecialchars($_POST['pid']));
	$Address = mysqli_real_escape_string($db_conx,htmlspecialchars($_POST['address']));
	$Gender = mysqli_real_escape_string($db_conx,htmlspecialchars($_POST['gender']));
	$Age = mysqli_real_escape_string($db_conx,htmlspecialchars($_POST['age']));
	$Phone = mysqli_real_escape_string($db_conx,htmlspecialchars($_POST['phone']));
	$DRID = mysqli_real_escape_string($db_conx,htmlspecialchars($_POST['drid']));
	$DType = mysqli_real_escape_string($db_conx,htmlspecialchars($_POST['dtype']));
	$Reciept = mysqli_real_escape_string($db_conx,htmlspecialchars($_POST['reciept']));
	
	
	$updateuser = "UPDATE register SET name='$Name', nic='$NIC', pid='$PID', address='$Address', gender='$Gender', age='$Age', phone='$Phone', drid='$DRID',  dtype='$DType', reciept='$Reciept' WHERE id='$id'";
	
	$query = mysqli_query($db_conx,$updateuser);
	
	if($query)
	{
		echo "<script>alert('Successfully Updated!')</script>";
		echo "<script>window.location.href='viewprod.php';</script>";
	}
	
	else
	{
		echo "Could not update data";
		echo "<script>window.location.href='viewprod.php';</script>";
	}
?>
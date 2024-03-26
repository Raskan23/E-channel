<?php
	//Start session
	
	require ('db.php');
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['ADMIN_LOGIN'])){
		header('location:adminlog.php');
		die();
	 }
?>
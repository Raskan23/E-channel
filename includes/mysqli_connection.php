<?php
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'benhms';
$item_per_page = 8;

$db_conx = mysqli_connect($db_host, $db_username, $db_password,$db_name)or die('could not connect to database');
?>
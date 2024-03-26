<?php
session_start();
$bd = mysqli_connect("localhost","root","","benhms");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/My Project/');
define('SITE_PATH','http://127.0.0.1/My Project/');

define('RECIEPT_IMAGE_SERVER_PATH',SERVER_PATH.'media/patient/');
define('RECIEPT_IMAGE_SITE_PATH',SITE_PATH.'media/patient/');
?>
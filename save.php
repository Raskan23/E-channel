<?php
require_once('auth.php');

function createRandomPassword() {
	$chars = "abcdefghijkmnopqrstuvwxyz023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 7) {
		$num = rand() % 33;
		$tmp = substr($chars, $num, 1);
		$pass = $pass . $tmp;
		$i++;
	}
	return $pass;
}
$name=$_POST['name'];
$nic=$_POST['nic'];
$pid = createRandomPassword();
$address=$_POST['address'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$phone=$_POST['phone'];
$drid=$_POST['drid'];
$dtype=$_POST['dtype'];



	if($_FILES['image']['type']!=''){
		  if($_FILES['image']['type']!='image/png' && $_FILES['image']['type']!='image/jpg' && $_FILES['image']['type']!='image/jpeg'){
		  $msg="Please select only png,jpg and jpeg image formate";
	   }
	}

$image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'],RECIEPT_IMAGE_SERVER_PATH.$image);
$sql = "INSERT INTO register (name, nic, pid, address, gender, age, phone, drid, dtype, reciept)VALUES('$name','$nic','$pid','$address','$gender','$age','$phone','$drid','$dtype','$image')";

if ($bd->query($sql) === TRUE) {
    echo "New record created successfully";
	header("location: print1.php?id=$pid");
} else {
    echo "Error: " . $sql . "<br>" . $bd->error;
}


?>
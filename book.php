
<?php
require_once('auth.php');
 
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$date=$_POST['date'];
$time=$_POST['time'];
$desease=$_POST['desease'];
$drid=$_POST['drid'];
$sql = "INSERT INTO channel (name, age, gender, address, phone, date, time, dtype, drid)VALUES('$name','$age','$gender','$address','$phone','$date','$time','$desease','$drid')";

if ($bd->query($sql) === TRUE) {
    $id= mysqli_insert_id($bd);
    echo "New record created successfully";
	header("location: print.php?id=$id");
} else {
    echo "Error: " . $sql . "<br>" . $bd->error;
}


?>
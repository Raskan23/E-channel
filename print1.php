
<?php
	//Start session
	
	require_once('auth.php');
	//Unset the variables stored in session
	
?>
					<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=400, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>Ben HMS</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 400px; font-size:12px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<html lang="en"> 

	<head> 
		<title> Patient Registration  </title> 
	</head>

</body id="body"> 

			<header >

            	<div class="wrap">
					<h1>Patient - Information</h1>
				</div>
              
				<div class="button"><br><br>
<a href="javascript:Clickheretoprint()">Print</a>
<div id="print_content" style="width: 400px;">
<br><br>
<?php

$id=$_GET['id'];
$result = mysqli_query($bd,"SELECT * FROM register WHERE pid='$id'");
while($row = mysqli_fetch_array($result))
	{
		echo 'Name: '.$row['name'].'<br>';
		echo 'NIC '.$row['nic'].'<br>';
		echo 'Patient-ID: '.$row['pid'].'<br>';
		echo 'Address: '.$row['address'].'<br>';
		echo 'Gender: '.$row['gender'].'<br>';
		echo 'Age: '.$row['age'].'<br>';
		echo 'Phone-No: '.$row['phone'].'<br>';
		echo 'Doctor-ID: '.$row['drid'].'<br>';
		echo 'Desease: '.$row['dtype'].'<br>';
		echo 'Reciept: <img src="'.RECIEPT_IMAGE_SITE_PATH.$row['reciept'].'" width="100" alt=""><br>';
		$pic=$row['reciept'];
	}
?>
</div>	
<a href="index.php">Index...</a>	
				</div>
				</div>

		 <header>

		 


</body>
</html> 
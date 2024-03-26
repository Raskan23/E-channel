<?php
require_once('auth.php');

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
		<title> Patient Medicine Prescription  </title> 
		<link rel="stylesheet" type="text/css" href="css/printm.css">
	</head>

</body id="body"> 

			<header >

            	<div class="wrap">
					<h1>Medicine - Information</h1>
				</div>
              
				<div class="button"><br><br>
<a href="javascript:Clickheretoprint()"><input class="Printbutton" type="button" value="Print"></a>
<div id="print_content" style="width: 400px;">
<br><br>
<?php

$pid=$_POST['pid'];
$result = mysqli_query($bd,"SELECT * FROM register WHERE nic='$pid'");
$check=mysqli_num_rows($result);
	if($check==0){
		$result = mysqli_query($bd,"SELECT * FROM register WHERE pid='$pid'");
		$check2=mysqli_num_rows($result);
		if($check2==0){?>
		<script>
			
			window.location.href='patient.php';
			alert("Patient Details Not Availabale");
		</script>
		<?php
			
		}
	}
while($row = mysqli_fetch_array($result))
	{
		echo 'Name: '.$row['name'].'<br>';
		echo 'NIC '.$row['nic'].'<br>';
		echo 'Patient-ID: '.$row['pid'].'<br>';
        echo 'Medicine Prescription:'.$row['reciept'].'<br>';
		echo 'Reciept: <img src="'.RECIEPT_IMAGE_SITE_PATH.$row['reciept'].'" width="100" alt=""><br>';
		
	}
?>
</div>

<br>
<br>
<br>
<a href="index.php"><input class="hmbutton" type="button" value="Home"></a>	
				</div>
				</div>

		 <header>


</body>
</html> 
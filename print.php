
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
		<title> Channel Reciept  </title> 
		<link rel="stylesheet" type="text/css" href="css/print.css">
	</head>

</body id="body"> 

			<header >

            	<div class="wrap">
					<h1>Channeling Confirmation</h1>
				</div>
              
				<div class="button">
Print and Bring This on Channeling<br><br>
<a href="javascript:Clickheretoprint()"><input class="printbutton" type="button" value="Print"></a>
<div id="print_content" style="width: 400px;">
<br><br>
<div class="print">
E CHANNELING CENTER <br> 
<?php

$id=$_GET['id'];
$result = mysqli_query($bd, "SELECT * FROM channel WHERE id='$id'");
while($row = mysqli_fetch_array($result))
	{
		echo 'Name: '.$row['name'].'<br>';
		echo 'Age: '.$row['age'].'<br>';
		echo 'Address: '.$row['address'].'<br>';
		echo 'Contact: '.$row['phone'].'<br>';
		echo 'Doctor: '.$row['drid'].'<br>';
		echo 'Desease: '.$row['dtype'].'<br>';
		echo 'Date: '.$row['date'].'<br>';
		echo 'Time: '.$row['time'].'<br>';
	}
?>
</div>
</div>		
				</div>
				</div>

		 <header>


</body>
</html> 
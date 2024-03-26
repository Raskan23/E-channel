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
		<title> Patient Details  </title> 
		<link rel="stylesheet" type="text/css" href="css/details.css">
	</head>

</body id="body"> 

			<header >

            	<div class="wrap">
					<h1>Medicine - Information</h1>
				</div>
              
				<div class="button"><br><br>
<a href="javascript:Clickheretoprint()"><input class="dbutton" type="button" value="Print"></a>
&nbsp; <div id="print_content" style="width: 400px;">
<br><br>
&nbsp; &nbsp; <h3> BEN Channeling Center </h3>
<?php
include('db.php');
$pid=$_POST['pid'];
$result = mysql_query("SELECT * FROM register WHERE pid='$pid'");
while($row = mysql_fetch_array($result))
	{
		echo 'BEN Channeling Center: ';
		echo 'Name: '.$row['name'].'<br>';
		echo 'NIC '.$row['nic'].'<br>';
		echo 'Patient-ID: '.$row['pid'].'<br>';
		
	}
?>
</div>
<img src="bills/<?php echo($pic);?>">	
<br>
<br>
<br>
<a href="index.php"><input class="dbutton" type="button" value="Home"></a>	
				</div>
				</div>

		 <header>


</body>
</html> 
<?php
include("includes/mysqli_connection.php");

?>

<?php

	$id = $_GET['id'];
	
	$sql = ("SELECT * FROM register WHERE id=$id");
	$query = mysqli_query($db_conx,$sql);
	
	while($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
	{
		$id = $row['id'];
		$name = $row['name'];
		$nic = $row['nic'];
		$pid = $row['pid'];
		$address = $row['address'];
		$gender = $row['gender'];
		$age = $row['age'];
		$phone = $row['phone'];
		$drid = $row['drid'];
		$dtype = $row['dtype'];
		$reciept = $row['reciept'];
		
	}

?>

<!DOCTYPE html>
<html>
<head>
<title>EDIT PATIENT DETAILS</title>
	<link rel="stylesheet" type="text/css" href="css/adminstyle.css">
</head>
<body>
<a href="adminpanal.php"> Admin </a>
<p align="center"><b>EDIT PATIENT DETAILS</b></p>

<br />
<div align="center">
<table border="borderless">
  <tr>
    <td colspan="5" height="96">
		<form name="formRegister" method="post" action="confirmeditprod.php">
        <table>
        <tr>
            <td bgColor="c6d3ce">
              <table border="borderless" width="500">
			  <tr bgColor="#f2f2f2">
				 <td width="165"><strong>ID : <?php echo $id; ?></strong></td>
				 <td><input type="hidden" name="id" value="<?php echo $id; ?>"></td>
			  </tr>
				<tr bgColor="lightblue">
                  <td width="165">Name</td>
                  <td><b><input class="txt" type="text" size="25" name="name" value="<?php echo $name; ?>"></b></td>
                </tr>
                <tr bgColor="#f2f2f2">
                  <td>NIC</td>
                  <td><b><input class="txt" type="text" size="25" name="nic" value="<?php echo $nic; ?>"></b></td>
				</tr>
                <tr bgColor="lightblue">
                  <td>PID</td>
                  <td><b><input class="txt" type="text" size="20" name="pid" value="<?php echo $pid; ?>"></b></td>
                </tr>
                <tr bgColor="#f2f2f2">
                  <td>Address</td>
                  <td><b><input class="txt" type="text" name="address" size="20" value="<?php echo $address; ?>"></b></td>
                </tr>
                <tr bgColor="lightblue">
                  <td>Gender</td>
                  <td><b><input class="txt" type="text" size="30" name="gender" value="<?php echo $gender; ?>"></b></td>
                </tr>
				<tr bgColor="#f2f2f2">
                  <td>Age</td>
                  <td><b><input class="txt" type="text" size="10" name="age" value="<?php echo $age; ?>"></b></td>
				</tr>				
				<tr bgColor="lightblue">
                  <td>Phone</td>
                  <td><b><input class="txt" type="text" name="phone" value="<?php echo $phone; ?>"></b></td>
                </tr>
				<tr bgColor="#f2f2f2">
                  <td>DRID</td>
                  <td><b><input class="txt" type="text" size="30" name="drid" value="<?php echo $drid; ?>"></b></td>
                </tr>
				<tr bgColor="lightblue">
                  <td>DType</td>
                  <td><b><input class="txt" type="text" size="30" name="dtype" value="<?php echo $dtype; ?>"></b></td>
                </tr>
				<tr bgColor="#f2f2f2">
                  <td>Reciept</td>
                  <td><b><input class="txt" type="file" size="30" name="reciept" value="<?php echo $reciept; ?>"></b></td>
                </tr>
				</table>
            </td>
        </tr>
        </table>
        <br>
        <table width="400" align="center" border="0">
          <tr>
            <td align="center" width="200"><input class="btn-sub" type="submit" value="Submit"></td>
            <td align="center" width="200"><input class="btn-sub" type="reset" name="reset" value="Reset Form" onClick="return confirm('Are you sure you want to reset the current information?');"></td>
          </tr>
        </table>
      </form>
    </td>
  </tr>
</table>
</div>
</body>
</html>
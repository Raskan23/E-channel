<?php
	require_once('auth.php');
	if(isset($_GET['type']) && $_GET['type']!=''){
		$type=mysqli_real_escape_string($bd,$_GET['type']);
	
		if($type=='delete'){
			$id=mysqli_real_escape_string($bd,$_GET['id']);
			$delete_sql="delete from register where id='$id'";
			mysqli_query($bd,$delete_sql);
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>VIEW DETAILS</title>
	<link rel="stylesheet" type="text/css" href="css/adminstyle.css">
</head>
<body bgcolor="lightblue">

<a href="adminpanal.php"> Admin </a>
<p align="center"><b>VIEW RECORD</b></p>

<br />
<?php

        // connect to the database
        


        // get results from database
        $result = mysqli_query($bd,"SELECT * FROM register ORDER BY id ASC") ;
                
        // display data in table
        
        echo "<table align='center' border='1' cellpadding='10'>";
		
		echo "<tr> <th>ID</th> <th>PATIENT NAME</th> <th>NIC</th> <th>PID</th> <th>ADDRESS</th> <th>GENDER</th> <th>AGE</th> <th>PHONE NO</th> <th>DRID</th> <th>DTYPE</th> <th>RECIEPT</th> <th></th> <th></th> </tr>";

		// loop through results of database query, displaying them in the table

        while($row = mysqli_fetch_array( $result )) 
		
		{	
			// echo out the contents of each row into a table
			echo "<tr>";
			echo '<td>' . $row['id'] . '</td>';
			echo '<td>' . $row['name'] . '</td>';
			echo '<td>' . $row['nic'] . '</td>';
			echo '<td>' . $row['pid'] . '</td>';
			echo '<td>' . $row['address'] . '</td>';
			echo '<td>' . $row['gender'] . '</td>';
			echo '<td>' . $row['age'] . '</td>';
			echo '<td>' . $row['phone'] . '</td>';
			echo '<td>' . $row['drid'] . '</td>';
			echo '<td>' . $row['dtype'] . '</td>';
			echo '<td><img src="'.RECIEPT_IMAGE_SITE_PATH.$row['reciept'].'" width="100" alt=""></td>';
			echo '<td><a href="register.php?id='.$row['id'].'">Edit</a></td>';
			echo '<td><a href="?type=delete&id='.$row['id'].'">Delete</a></td>';
			echo "</tr>"; 
		}

        // close table>
        echo "</table>";
?>
</body>
</html>
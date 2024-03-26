
<?php
 // connect to the database
 include('includes/connect-db.php');
 
 // check if the 'id' variable is set in URL, and check that it is valid
 
 // get id value
 $id = $_GET['id'];
	$sql = "DELETE FROM register WHERE id=$id";
		$location = "viewprod.php";
	
// delete the entry
$result = mysql_query($sql)
or die(mysql_error()); 

?>

<script>alert("Successfully Deleted!");	
	window.location.href='<?php echo $location;?>';
 </script>
 
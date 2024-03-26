<?php
	require_once('auth.php');
   $name='';
   $nic='';
   $pid = '';
   $address='';
   $gender='';
   $age='';
   $phone='';
   $drid='';
   $dtype='';
   
$msg='';
   $image_required='required';
   if(isset($_GET['id']) && $_GET['id']!=''){
      $image_required='';
      $id=mysqli_real_escape_string($bd,$_GET['id']);
      $res=mysqli_query($bd,"select * from register where id='$id'");
      $check=mysqli_num_rows($res);
      if($check>0){
         $row=mysqli_fetch_assoc($res);
         $name=$row['name'];
         $nic=$row['nic'];
         $pid = $row['pid'];
         $address=$row['address'];
         $gender=$row['gender'];
         $age=$row['age'];
         $phone=$row['phone'];
         $drid=$row['drid'];
         $dtype=$row['dtype'];
      }else{
         header('location:viewpatients.php');
         die();
      }
   }

   if(isset($_POST['submit'])){
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
      
      
      if($_GET['id']==0){
         if($_FILES['image']['type']!='image/png' && $_FILES['image']['type']!='image/jpg' && $_FILES['image']['type']!='image/jpeg'){
            $msg="Please select only png,jpg and jpeg image formate";
         }
      }else{
         if($_FILES['image']['type']!=''){
               if($_FILES['image']['type']!='image/png' && $_FILES['image']['type']!='image/jpg' && $_FILES['image']['type']!='image/jpeg'){
               $msg="Please select only png,jpg and jpeg image formate";
            }
         }
      }

      if($msg==''){
         if(isset($_GET['id']) && $_GET['id']!=''){
            $pid = $row['pid'];
            if($_FILES['image']['name']!=''){
               $image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
               move_uploaded_file($_FILES['image']['tmp_name'],RECIEPT_IMAGE_SERVER_PATH.$image);
               $update_sql="update register set name='$name',nic='$nic', address='$address', gender='$gender', age='$age', phone='$phone', drid='$drid', dtype='$dtype', reciept='$image' where id='$id'";
            }
            else{
               $update_sql="update register set name='$name',nic='$nic', address='$address', gender='$gender', age='$age', phone='$phone', drid='$drid', dtype='$dtype' where id='$id'";
            }
            
            if ($bd->query($update_sql) === TRUE) {
               echo "New record created successfully";
               header("location: print1.php?id=$pid");
            } else {
               echo "Error: " . $update_sql . "<br>" . $bd->error;
            }
         }else{
            $image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'],RECIEPT_IMAGE_SERVER_PATH.$image);
            $sql = "INSERT INTO register (name, nic, pid, address, gender, age, phone, drid, dtype, reciept)VALUES('$name','$nic','$pid','$address','$gender','$age','$phone','$drid','$dtype','$image')";
            
            if ($bd->query($sql) === TRUE) {
               echo "New record created successfully";
               header("location: print1.php?id=$pid");
            } else {
               echo "Error: " . $sql . "<br>" . $bd->error;
            }
         }
         
      }
      
      
      
   }
?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<link rel="stylesheet" href="css/register.css" type="text/css">
</head>
<body>
<h2 class="reg-head" align="center"><font> Patient Registration </font></h2>

<div id="contentsin" class="contentsin">
   <form class="pat-reg" method="post" enctype="multipart/form-data">
<table align="center" cellpadding="10" class="boderless-table tab tab2" action="reg.php" method="post">
               <tr>
                  <td class="text-danger">Name</td>
                  <td><input class="form-control" type="text" placeholder="name" name="name"  required value="<?php echo $name?>"></td>
               </tr>
			   <tr>
                  <td class="text-danger">N.I.C No</td>
                  <td><input class="form-control" type="text" placeholder="N.I.C Number" name="nic"  required value="<?php echo $nic?>"></td>
               </tr>
			  
               <tr>
                  <td class="text-danger">Address</b></td>
                  <td><input class="form-control" type="text" placeholder="Home or hall address" name="address"  required value="<?php echo $address?>"></td>
               </tr>
			   <tr>
                  <td class="text-danger">Gender</b></td>
                  <td>
                     <select class="form-control" name="gender" >
                     <?php if(isset($_GET['id']) && $_GET['id']!=''){ ?>
                        <option value="<?php echo $gender?>" selected><?php echo $gender?> </option>
                     <?php }?>
                        <option value="Male" >Male </option>
                        <option value="Female" >Female </option>
                        <option value="Other">Other </option>
                     
						</td>
               </tr>
               <tr>
                  <td class="text-danger">Age</b></td>
                  <td><input class="form-control" type="number" placeholder="Age" name="age" required value="<?php echo $age?>"></td>
               </tr>
               <tr>
                  <td class="text-danger">Phone</b></td>
                  <td><input class="form-control" type="number" placeholder="phone" name="phone"  required value="<?php echo $phone?>"></td>
               </tr>
               <tr>
                  <td class="text-danger">Doctor Detils</b></td>
                  <td><input class="form-control" type="text" autocomplete="off" placeholder="Doctor ID" name="drid" required value="<?php echo $drid?>"></td>
               </tr>
               <tr>
                  <td class="text-danger">Medical type</td>
                  <td><input class="form-control" type="text" placeholder="Medical type"  name="dtype"  required value="<?php echo $dtype?>"></td>
               </tr>
               <tr>
                  <td class="text-danger">Medical Precriptions</td>
                  <td><input class="form-control" type="file" placeholder=">Precriptionsfile" name="image"  <?php echo  $image_required?>></td>
               </tr>

               <tr><div style="color:red"><?php echo $msg?></div></tr>
               <tr class="text-center">
                <td><center><input class="btn-sub" type="reset" value="Reset"></center></td>
                  <td><center><input class="btn-sub" type="submit" name="submit" value="Submit"></center></td>
                  
               </tr>
            </table>
			</form>
			</div>
			</body>
			</html>
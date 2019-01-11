<?php
require('db.php');
include("authentication.php");
$id=$_REQUEST['id'];
$query = "SELECT * from adddata where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body background="photos/pexels-photo-304664.jpeg" alt="Responsive background-image" >
<br/><br/><br/><br/>
<div class="sidebar">
  <a href="profile.php"><i class="fa fa-fw fa-home"></i> Profile</a>
  <a href="insert.php"><i class="fa fa-address-card-o"></i>Add new Contact</a>
  <a href="logout.php"><i class="fa fa-fw fa-user"></i> Logout</a>
</div>
<center><h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['submit']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$firstname =$_POST['firstname'];
$surname =$_POST['surname'];
$phone =$_POST['phone'];
$update="update adddata set
firstname='".$firstname."', surname='".$surname."',
phone='".$phone."' where id='".$id."'";
mysqli_query($con, $update); 
$status = "Contact Updated Successfully. </br></br>
<a href='view.php'>View Updated Contact</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="firstname" placeholder="Enter Name" 
required value="<?php echo $row['firstname'];?>" /></p>
<p><input type="text" name="surname" placeholder="Enter surname" 
required value="<?php echo $row['surname'];?>" /></p>
<p><input type="text" name="phone" placeholder="Enter number" 
required value="<?php echo $row['phone'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
</center>
<?php } ?>
</div>
</div>
</body>
</html>
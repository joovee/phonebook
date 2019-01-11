<?php
require('db.php');
include("authentication.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $firstname =$_REQUEST['firstname'];
    $surname = $_REQUEST['surname'];
    $phone = $_REQUEST['phone'];
    $ins_query="insert into adddata (firstname,surname,phone) values
    ('$firstname','$surname','$phone')";
    mysqli_query($con,$ins_query)
    or die(mysqli_affected_rows());
    $status = "New contact added Successfully.
    </br></br><a href='view.php'>View Added Contact</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Add New Contacts</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body background="photos/pexels-photo-304664.jpeg" alt="Responsive background-image" >
<div class="sidebar">
  <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="profile.php"><i class="fa fa-sign-out"></i>Profile</a>
  <a href="view.php"><i class="fa fa-address-card-o"></i>View Contacts</a>
  <a href="logout.php"><i class="fa fa-fw fa-user"></i> Logout</a>
</div>
<div class="main">
<br/><br/><br/><br/><div class="form">
<div>
<h2><font face="Britannic Bold">Add New Contacts</font></h2>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="firstname" placeholder="Enter Name" required /></p>
<p><input type="text" name="surname" placeholder="Enter surname" required /></p>
<p><input type="text" name="phone" placeholder="Enter number" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</div>
</body>
</html>
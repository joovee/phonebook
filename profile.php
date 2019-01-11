<?php
require('db.php');
include("authentication.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Profile</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body background="photos/pexels-photo-304664.jpeg" alt="Responsive background-image" >
<div class="sidebar">
  <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="insert.php"><i class="fa fa-address-card-o"></i>Add New Contacts</a>
  <a href="view.php"><i class="fa fa-eye"></i>View Contacts</a>
  <a href="logout.php"><i class="fa fa-fw fa-user"></i> Logout</a>
</div>
<div class="main">
<br/><br/><br/><br/><br/><br/><br/><br/><br/><div>
<center>
<h1>Welcome to Your Profile</h1><br/><br/>
</center>
</div>
</div>
</body>
</html>
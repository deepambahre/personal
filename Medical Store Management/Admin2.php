<?php

require('header.php');
error_reporting(0);
session_start();
if(!isset($_SESSION['Username']))
{
	header('location:Admin.php');
	
}

?>

<html>
<head>
<title>Indorii Medical Store</title>
<link rel="stylesheet" type="text/css" href="CSS/careers.css">
</head>
<body background="images/line_glare_light_color_background_hd-wallpaper-45215.jpg">

<div id="right">
<br/>
<center>
<nav>
<a href="index2.php" class="btn btn-default"><font size="3" color="#009966">Home</font></a>
<a href="about.php" class="btn btn-default"><font size="3" color="#009966">AboutUs</font></a>
<a href="product.php" class="btn btn-default"><font size="3" color="#009966">Product</font></a>
<a href="contact.php" class="btn btn-default"><font size="3" color="#009966">ContactUs</font></a>
<a href="careers.php" class="btn btn-default"><font size="3" color="#009966">Careers</font></a>
<a href="help.php" class="btn btn-default"><font size="3" color="#009966">Help</font></a>
</nav>
</center>
<br>

<?php
if ( isset($_GET['success']) && $_GET['success'] == 1 )
{

     echo "<span style='color:#008000;'>Welcome Admin </span>";
}

?>

<br><br>
<center>
<table cellpadding="10">


<tr>
<td><div style="width:120px;height:140px;border:2px solid #000;"><a href=""><img src="images/AdminHome.png" height="140px" width="120px"/></a></div></td>
<td><div style="width:120px;height:140px;border:2px solid #000;"><a href=""><img src="images/setting.png" height="140px" width="120px"/></a></div></td>
<td><div style="width:120px;height:140px;border:2px solid #000;"><a href=""><img src="images/newMad.jpg" height="140px" width="150px"/></a></div></td>
<td><div style="width:120px;height:140px;border:2px solid #000;"><a href=""><img src="images/Vendor logo.png" height="140px" width="120px"/></a></div></td>
</tr>

<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index2.php" class="btn btn-default" style="text-decoration:none"><font size="3" color="#009966">Home</font></a></td>
<td><a href="AddMedicine.php" class="btn btn-default" style="text-decoration:none"><font size="3" color="#009966">Add Medicine</font></a></td>
<td><a href="newMedicine.php" class="btn btn-default" style="text-decoration:none"><font size="3" color="#009966">Add New Medicine</font></a></td>
<td>&nbsp;&nbsp;&nbsp;<a href="vendor.php" class="btn btn-default" style="text-decoration:none"><font size="3" color="#009966">Add Vendor</font></a></td>
</tr>
</table>
</center>
</div>
</body>
</html>
<?php
if ( isset($_GET['result']) && $_GET['result'] == 0 )
{

     echo "<span style='color:#008000;'>Error: Please Enter Valid Info </span>";
}

if ( isset($_GET['result']) && $_GET['result'] == 1 )
{

     echo "<span style='color:#008000;'>Vendor Details Add Successfully </span>"; 	 
}
?>
<?php require('footer.php');?>
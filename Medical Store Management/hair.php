<?php
require('header.php');
error_reporting(0);
session_start();
if(!isset($_SESSION['Username']))
{
	header('location:index.php');
	
}
?>
<html>
<head>
<style>
ul {
    list-style-type: none;
}
td, th {
    max-width: 145px;
	padding-bottom: 9px;
}

</style>
</head>
<body background="images/line_glare_light_color_background_hd-wallpaper-45215.jpg">

<!--Start left-->
<div id="left">
<br>
<?php if ( isset($_GET['result']) && $_GET['result'] == 1 )
{

     echo "<span style='color:#008000;'>Welcome </span>";
}?>
<button style="width:265px"><a href="profile.php" style="text-decoration:none"><font size="5" color="#009966">Profile</font></a></button>
<br><br>
<ul id="ul">
  <li><a href=""><b>Categories</b></a></li>
  <li><a href="hair.php">Hair Product</a></li>
  <li><a href="skin.php">Skin Product</a></li>
  <li><a href="baby.php">Baby Product </a></li>
  <li><a href="health.php">Health Product</a></li>
</ul>
</div>
<!--End left-->
<!--Start right-->
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
<table align="center" cellpadding="10">
<tr>
<td><div style="width:120px;margin:0px 20px 0px 0px;height:140px;border:2px solid #000;"><a href="hair1.php"><img src="images/hair/1.jpg" height="140px" width="120px"/></a></div></td>
<td><div style="width:120px;margin:0px 20px 0px 0px;height:140px;border:2px solid #000;"><a href="hair2.php"><img src="images/hair/2.jpg" height="140px" width="120px"/></a></div></td>
<td><div style="width:120px;margin:0px 20px 0px 0px;height:140px;border:2px solid #000;"><a href="hair3.php"><img src="images/hair/3.png" height="140px" width="120px"/></a></div> </td>
<td><div style="width:120px;margin:0px 20px 0px 0px;height:140px;border:2px solid #000;"><a href="hair4.php"><img src="images/hair/4.png" height="140px" width="120px"/></a></div></td>
</tr>

<tr>
<td><a style="color:#fff;" href="hair1.php">Garnier Color Naturals Men <br> Hair Color</a></td>
<td><a style="color:#fff;" href="hair2.php">Garnier Fructis <br> Strengthening Shampoo</a></td>
<td><a style="color:#fff;" href="hair3.php">Mediker Shampoo</a></td>
<td><a style="color:#fff;" href="hair4.php">Himalaya Anti Hair <br> Loss Cream </a></td>
</tr>

<tr>
<td><div style="width:120px;margin:0px 20px 0px 0px;height:140px;border:2px solid #000;"><a href="hair5.php"><img src="images/hair/5.png" height="140px" width="120px"/></a></div></td>
<td><div style="width:120px;margin:0px 20px 0px 0px;height:140px;border:2px solid #000;"><a href="hair6.php"><img src="images/hair/6.png" height="140px" width="120px"/></a></div></td>
<td><div style="width:120px;margin:0px 20px 0px 0px;height:140px;border:2px solid #000;"><a href="hair7.php"><img src="images/hair/7.png" height="140px" width="120px"/></a></div> </td>
<td><div style="width:120px;margin:0px 20px 0px 0px;height:140px;border:2px solid #000;"><a href="hair8.php"><img src="images/hair/8.png" height="140px" width="120px"/></a></div></td>
</tr>

<tr>
<td><a style="color:#fff;" href="hair5.php">Himalaya Anti-Dandruff <br> Hair Oil</a></td>
<td><a style="color:#fff;" href="hair6.php">kesh king hair oil</a></td>
<td><a style="color:#fff;" href="hair7.php">Livon Hair Gain Oil</a></td>
<td><a style="color:#fff;" href="hair8.php">Patanjali Kesh Kanti <br> Natural Hair Cleaner </a></td>
</tr>

  </table>   
</div>
<!--End right-->
</body>
</html>

<?php require('footer.php'); ?>
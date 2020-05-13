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
  <li><a href="baby.php">Skin Product</a></li>
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
<table align="center" cellpadding="15">
<tr>
<td><div style="width:120px;margin:0px 20px 0px 0px;height:140px;border:2px solid #000;"><a href="skin1.php"><img src="images/skin/1.png" height="140px" width="120px"/></a></div></td>
<td><div style="width:120px;margin:0px 20px 0px 0px;height:140px;border:2px solid #000;"><a href="skin2.php"><img src="images/skin/2.png" height="140px" width="120px"/></a></div></td>
<td><div style="width:120px;margin:0px 20px 0px 0px;height:140px;border:2px solid #000;"><a href="skin3.php"><img src="images/skin/3.png" height="140px" width="120px"/></a></div> </td>
<td><div style="width:120px;margin:0px 20px 0px 0px;height:140px;border:2px solid #000;"><a href="skin4.php"><img src="images/skin/4.png" height="140px" width="120px"/></a></div></td>
</tr>

<tr>
<td><a style="color:#fff;" href="skin1.php">LIFEBUOY Act Fsh <br> Hand Santzr</a></td>
<td><a style="color:#fff;" href="skin2.php">VLCC Anti Tan <br> Facial Kit</a></td>
<td><a style="color:#fff;" href="skin3.php">BOROPLUS Ayurvedic <br> Ointment</a></td>
<td><a style="color:#fff;" href="skin4.php">BIO OIL Specialist <br> Skin Care Oil</a></td>
</tr>

<tr>
<td><div style="width:120px;margin:0px 20px 0px 0px;height:140px;border:2px solid #000;"><a href="skin5.php"><img src="images/skin/5.jpg" height="140px" width="120px"/></a></div></td>
<td><div style="width:120px;margin:0px 20px 0px 0px;height:140px;border:2px solid #000;"><a href="skin6.php"><img src="images/skin/6.jpg" height="140px" width="120px"/></a></div></td>
<td><div style="width:120px;margin:0px 20px 0px 0px;height:140px;border:2px solid #000;"><a href="skin7.php"><img src="images/skin/7.jpg" height="140px" width="120px"/></a></div> </td>
<td><div style="width:120px;margin:0px 20px 0px 0px;height:140px;border:2px solid #000;"><a href="skin8.php"><img src="images/skin/8.jpg" height="140px" width="120px"/></a></div></td>
</tr>

<tr>
<td><a style="color:#fff;" href="skin5.php">Dr. Batra's Natural <br> Moisturising Lotion</a></td>
<td><a style="color:#fff;" href="skin6.php">AYUR HERBAL <br> ASTRINGENT WITH ALOEVERA</a></td>
<td><a style="color:#fff;" href="skin7.php">Every Man Jack <br> Sun Protection Face Lotion</a></td>
<td><a style="color:#fff;" href="skin8.php">Medline Remedy <br> Skin Repair Cream</a></td>
</tr>

  </table>   
</div>
<!--End right-->
</body>
</html>

<?php require('footer.php'); ?>
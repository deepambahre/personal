
<?php

/*include('Class/class.db');
include('class.function');
include('Class/class.validation');*/

require('header.php');
error_reporting(0);
session_start();

if(!isset($_SESSION['Username']))
{
	header('location:index.php');
	
}

?>

<style>
ul {
    list-style-type: none;
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
<a href="profile.php" class="btn btn-default" style="text-decoration:none;width:240px;margin-left:20px;margin-bottom:20px;"><font size="5" color="#009966">Profile</font></a>

<ul id="ul">
  <li><b class="b-cat">Categories</b></li>
  <li><a href="hair.php" class="btn my-sidebtn">Hair Product</a></li>
  <li><a href="skin.php" class="btn my-sidebtn">Skin Product</a></li>
  <li><a href="baby.php" class="btn my-sidebtn">Baby Product </a></li>
  <li><a href="health.php" class="btn my-sidebtn">Health Product</a></li>
</ul>

<center><p><h3>Skin protective</h3><center>
<img src="images/main/skin.png" height="85px">
Want to get rid of all the painful pimples? Striving for glowing skin? A protective shield from sun can lessen the risk of skin cancer. Good skin care and gentle cleansing can keep your skin healthy for years to come.  
</p>   

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

<center>
<?php 
include('productName.php');
?>

<br><br>
<form action="productSearch.php" method="post">
<input type="text" name="search">
<input type="submit" name="submit" value="submit">
</form>

<br><br>
     <div id="doctor">
      <a href="prescriptions.php"><img src="images/Prescriptions.png" height="100px" width="200px"/></a>
      &nbsp;&nbsp;&nbsp;<a href="doctor.php"><img src="images/canvas.png" height="100px" width="200px"/></a>
     </div>

</center>
</div>
<!--End right-->
</body>
</html>

<?php require('footer.php'); ?>

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
<link rel="stylesheet" type="text/css" href="magnifierskin8.css">
<script type="text/javascript" src="magnifierskin8.js"></script>
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
<br>

<h1><font color="#F0E68C">Babycare Gift Pack (Soap-Shampoo-Powder)</font></h1>
</center>
<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#F0E68C">Contents:</font></h3>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><font color="#F0E68C">&#8594;</font></span>&nbsp;&nbsp;&nbsp;<font color="#F0E68C" size="+1">Gentle baby soap (75 g)</font>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><font color="#F0E68C">&#8594;</font></span>&nbsp;&nbsp;&nbsp;<font color="#F0E68C" size="+1">Gentle baby shampoo (40 ml)</font>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><font color="#F0E68C">&#8594;</font></span>&nbsp;&nbsp;&nbsp;<font color="#F0E68C" size="+1">Baby powder (100 g)</font>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><font color="#F0E68C">&#8594;</font></span>&nbsp;&nbsp;&nbsp;<font color="#F0E68C" size="+1">Diaper rash cream (20 g))</font>



<br>
<!-----------------------Start right_left------------------->
<div id="right_left">

<div id="thumb_container"><!-- place #thumb_container in the required position -->
<div id="thumb"></div>
</div>

<div id="image_container"  align="center"></div><!-- place #image_container in the required position -->


  </div>
    </div>

</div>
<!-----------------------End right_left--------------------->
<!-----------------------Start right_right------------------->
<!--<div id="left_right" align="center">

</div>-->
<!-----------------------End right_right--------------------->

</div>
<!-----------------------End right-------------------------->
</body>
</html>

<?php require('footer.php'); ?>
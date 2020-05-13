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
<link rel="stylesheet" type="text/css" href="magnifierhealth4.css">
<script type="text/javascript" src="magnifierhealth4.js"></script>
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

<h1><font color="#F0E68C">Nestlé® CERELAC® Wheat & Dates</font></h1>
</center>
<h3><pre>                                                         <font color="#F0E68C">PRODUCT INGREDIENTS:</font><pre></h3>
<font color="#F0E68C" size="+1"><pre>                                      Wheat Flour, Dried Milk Skimmed, Caramel, Sucrose,Palm Olein,Date Syrup, Low Erucic Acid,                                                              
                                      Rapeseed Oil,Coconut Oil,Maltodextrin, Vanillin,Corn Starch, Sunflower Oil, Sugar Syrup,
                                      Bifidus Culture, Minerals& Vitamins.</font>                                  
<h3>                                                                                 <font color="#F0E68C">COUNTRIES AVAILABLE IN:</font>
<br><font color="#F0E68C" size="+1">                                                                            KSA, UAE, Kuwait, Lebanon, Jordan, Qatar,Bahrain,
                                                                            Oman, Iran & Iraq.<pre></font></h3>
                               
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
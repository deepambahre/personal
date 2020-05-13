<?php
require('header.php');
error_reporting(0);
session_start();
/*if(!isset($_SESSION['Username']))
{
	header('location:index.php');
	
}
*/
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/indexcss.css">
</head>
<body background="images/line_glare_light_color_background_hd-wallpaper-45215.jpg">

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
<h1>About Us</h1>

Indorii Medical Store  is a platform where you can order medicines online at affordable rates. In our busy schedules, locating and going to a medicine store becomes troublesome, often leading to avoidable delays in getting medicines. With Medicine Movers, you never have to worry about going to a pharmacy again. Youcan search and purchase any medicine (OTC/prescribed) from the comfort of your phone or computer.

With its new and innovative application, Medicine Movers seeks to revolutionize the way we find and purchase medicines. With our highly accessible and easy-to-use app, buying medicines online is simpler than ever. FREE home delivery, anywhere in indore (Madhya Pradesh) We are an end to end healthcare service provider where the doctors can enter their prescriptions, patients can upload their prescriptions, their periodic vitals as well as order the regular medications through us (Phone, Web Portal, Mobile App, etc) and get it delivered to their doorstep, get awareness regarding their health conditions, prescription and doctor appointment reminders, etc

<h3>Our Mission</h3>

To ensure that all people have access to high-quality medical care at all times through innovative technologies at affordable cost.

<h3>Our Vision</h3>

Seamless interaction and movement of data between all the principals of the health industry viz, govt, manufacturers, distributors, retailers, doctors and patients.

<h3>Note -</h3>

    You are required to send a scan copy of valid prescription from authorized doctor which is mandatory.
    No medicine will be delivered without prescription.
    A minimum order of Rs 500/- is required
    Free delivery on all medicines if your total order amount is Rs. 500/- or more. Otherwise Rs. 55/- is charged as delivery charges.
    Payment Method – Only COD (Cash On Delivery) is available
</center>
<!--End right-->

</body>
</html>
<?php require('footer.php'); ?>
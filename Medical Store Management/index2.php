
<?php 
error_reporting(0);
session_start();
?>
<?php
require('header.php');
if(!isset($_SESSION['Username']))
{
	header('location:index.php');	
}
?>
<style>
.my-nav-default {
    border-bottom: double;
}
.navbar-header {
    margin-top: -16px;
}
</style>
<body background="images/line_glare_light_color_background_hd-wallpaper-45215.jpg">

<div class="main-part">
    <div class="container-fluid">
	    <div class="row">
		    <div class="col-md-12 col-sm-12">
			    <div class="product-middle">
					<div class="row">
	                <div class="col-md-2 col-sm-12">
					    <div class="main-sidebar">
							<marquee direction="down" onMouseOver="this.stop();" onMouseOut="this.start();" height="538">
<p>
<h3><font color="#F0E68C">Heart Diseases</font></h3>
<img src="images/main/heart.png">
Your heart is a pumping muscle that circulates oxygen and nutrients in your blood to the rest of your body. Reduce your risk of heart diseases by making small changes in your life.  
</p>

<p>
<h3><font color="#F0E68C">Diabetes Diseases</font></h3>
<img src="images/main/diabetic.png">
Diabetes is a lifelong condition that can lead to major complications like kidney failure, eye damage, heart disease, stroke, and more. Keep your blood sugar level under control by right nutrition, exercise, and regular check up.   
</p>

<p>
<h3><font color="#F0E68C">Blood Pressure</font> </h3>
<img src="images/main/blood_pressure.png">
Blood pressure is the force applied by the circulating blood upon the walls of blood vessels during the active and resting time. Low blood pressure indicates that all the body parts are not getting enough blood. High blood pressure may eventually cause many health problems since heart has to do strenuous work to pump blood to the body.   
</p>
</marquee>
                        </div>
                    </div>
					<div class="col-md-8 col-md-offset-1 col-sm-12">
					    <div class="main-middlebar">
						<nav class="product-nav">
                            <a href="index2.php" class="btn btn-default"><font size="3" color="#009966">Home</font></a>
                            <a href="about.php" class="btn btn-default"><font size="3" color="#009966">AboutUs</font></a>
                            <a href="product.php" class="btn btn-default"><font size="3" color="#009966">Product</font></a>
                            <a href="contact.php" class="btn btn-default"><font size="3" color="#009966">ContactUs</font></a>
                            <a href="careers.php" class="btn btn-default"><font size="3" color="#009966">Careers</font></a>
                            <a href="help.php" class="btn btn-default"><font size="3" color="#009966">Help</font></a>
                        </nav> 
						<center>
                        <?php
if ( isset($_GET['success']) && $_GET['success'] == 1 )
{

     echo "<span style='color:#008000;'>Welcome ".$_SESSION['Username']." To Indorii Medical Store </span>";
}
 if ( isset($_GET['result']) && $_GET['result'] == 1 )
{
     echo "<span style='color:#008000;'>Insert Data Successfully </span>"; 	 
}

?>
</center>						
						   <center> <img src="images/main/omsi.png" class="img-responsive"/></center>

<center><h3><font color="#F0E68C">Buy Generic Medicines Online from</font></h3>
<h2><font color="#F0E68C">Indorii Medical store – The Trusted Online Chemist</font></h2></center>

<p>Welcome to one of the most trusted names in generic medicine online. Here at Mera Pharmacy, we put your health first. We are committed to giving you only the best and highest quality medicines, surgical products, FMCG goods, chemist supplies in India. We follow a strict marketplace model so that only authorized sellers of prescription medicines make it to our store. Purchase your medicines and supplies from us.</p>
<br>
<p class="remove-top-sp">Apart from being the best discount shop for medicines, we also provide a wide range of value-added services online so you can do more than buy your generic medicine, nutrition supplements, over-the-counter needs, healthcare devices and other miscellany through our online pharmacy. We have recently introduced a reminder service—the first of its kind in India, where you can be reminded not only to refill your prescriptions, but also take your medicines at a particular time daily. We also have one of the largest medicine databases in the country, providing you with good information about the healthcare products you purchase regularly.</p>
<br><br>
 
                        </div>
                    </div>
                </div>
				</div>
            </div>
        </div>
    </div>
</div>

</body>
</html>


<?php require('footer.php');?>





















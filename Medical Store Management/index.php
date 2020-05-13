<?php 
session_start();
session_destroy();
?>
<?php
require('HeaderMain.php');

?>

<body background="images/line_glare_light_color_background_hd-wallpaper-45215.jpg">

<!-----------------------------------Start left----------------------------->
<div id="left">
<form action="login.php" method="post">
<table align="center" border="3px" bgcolor="#9400D3">
<caption><font color="#F0E68C" size="+2"><b>Login Form</b><br></font><br>
</caption>
<tr>
<td height="43"><b><font color="#F0E68C">&nbsp;&nbsp;Username</font></b></td>
<td><input type="text" name="Username" placeholder="Enter Username" size="20px" style="height:25px" multiple/></td>
</tr>

<tr>
<td height="39"><b><font color="#F0E68C">Password</font></b></td>
<td><input type="password" name="Password"placeholder="Enter Password" size="20px" style="height:25px" multiple/></td>
</tr>

<tr align="center">
<td height="39" colspan="2"><input type="submit" name="submit" value="Login"/>
<input type="reset" name="reset" value="Reset"/></td>
</tr>

<tr>
<td colspan="2">
<a href="forget.php" style="text-decoration:none"><font color="#F0E68C">Forget Password</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="registration.php" style="text-decoration:none"><font color="#F0E68C">Register Now</font></a>
</td>
</tr>
</table>
</form>

<center><a href="Admin.php"><font color="#F0E68C"><b>Admin Login</b></font></a></center>


<?php if ( isset($_GET['success']) && $_GET['success'] == 0 )
{

     echo "<span style='color:#FF0000;'>Enter Wrong Email Or Password </span>";
}
  
  /*if ( isset($_GET['result']) && $_GET['result'] == 02 )
           {

     echo "<span style='color:#FF0000;'>Error: Validation Problem </span>";
            }*/
  
?>

 <center><p><h3><font color="#F0E68C">Supplement & Vitamins</font></h3><center>
<img src="images/main/cat3.png" height="85px">
Supplement meaning 'something added', helps to boost up the basic healthy diet and lifestyle. Vitamins and supplements are not substitute for nutrients from fresh fruits,vegetables,and whole grains.  
</p> 


    
</div>
<!----------------------------End left------------------------------>
<!---------------------------Start right---------------------------->
<div id="right">
<br>
<center>
<nav>

<a href="about.php" class="btn btn-default"><font size="3" color="#009966">AboutUs</font></a>
<a href="contact.php" class="btn btn-default"><font size="3" color="#009966">ContactUs</font></a>
<a href="careers.php" class="btn btn-default"><font size="3" color="#009966">Careers</font></a>
<a href="help.php" class="btn btn-default"><font size="3" color="#009966">Help</font></a>
</nav>
</center>
<br>
<marquee>
<img src="images/main/1.jpg" height="130px" width="300px"/>
<img src="images/main/prescription_drugs.jpg" height="130px" width="250px" />
<img src="images/main/tablets_capsules_multi-colored_drug_hd-wallpaper-47019.jpg" height="130px" width="300px" />
</marquee>
<br>

<center><h3><font color="#F0E68C">Buy Generic Medicines Online from</font></h3>
<h2><font color="#F0E68C">Indorii Medical store – The Trusted Online Chemist</font></h2></center>

Welcome to one of the most trusted names in generic medicine online. Here at Mera Pharmacy, we put your health first. We are committed to giving you only the best and highest quality medicines, surgical products, FMCG goods, chemist supplies in India. We follow a strict marketplace model so that only authorized sellers of prescription medicines make it to our store. Purchase your medicines and supplies from us simply by presenting your prescription and they will be delivered to you by the appointed company or by the seller itself, anywhere in India.

Apart from being the best discount shop for medicines, we also provide a wide range of value-added services online so you can do more than buy your generic medicine, nutrition supplements, over-the-counter needs, healthcare devices and other miscellany through our online pharmacy. We have recently introduced a reminder service the first of its kind in India, where you can be reminded not only to refill your prescriptions, but also take your medicines at a particular time daily. We also have one of the largest medicine databases in the country, providing you with good information about the healthcare products you purchase regularly.

We also provide a reminder service free of cost, and our valued consumers enjoy huge discounts when they buy products with special partner and seller-provided coupons. Our online store and portal also features an extensive drug dictionary where you can look up your prescriptions or find the generic or prescription name of the drug you are purchasing.


</div>
<!--------------------------End right-------------------------------->
</body>
</html>

<?php require('footer.php'); ?>

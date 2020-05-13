<?php
error_reporting(0);
require('header.php');
session_start();
if(!isset($_SESSION['Username']))
{
	header('location:index.php');
	
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/careers.css">
</head>
<body background="images/line_glare_light_color_background_hd-wallpaper-45215.jpg">
<br>
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

<table align="center" border="3px" bgcolor="#9400D3">
<caption><font color="#F0E68C" size="+2"><b>Top Doctor Information</b><br></font><br>
</caption>

<tr>
<th><b><font color="#F0E68C">S.No.</font></b></th>
<th><b><font color="#F0E68C">Name</font></b></th>
<th><b><font color="#F0E68C">Specialization</font></b></th>
<th><b><font color="#F0E68C">Degree</font></b></th>
<th><b><font color="#F0E68C">Phone</font></b></th>
<th><b><font color="#F0E68C">Address</font></b></th>
</tr>

<tr>
<td><font color="#FFFFFF">1.</font></td>
<td><font color="#FFFFFF">Dr.Pradeep Saraf</font></td>
<td><font color="#FFFFFF">Orthopaedic Surgeon</font></td>
<td><font color="#FFFFFF">MBBS, D.Ortho</font></td>
<td><font color="#FFFFFF">0731-2492148</font></td>
<td><font color="#FFFFFF">40 A, Bakhtawarram Nagar, Near Ajit & Ajay Club, Bakhtawarram Nagar, Indore, Madhya Pradesh 452001</font></td>
</tr>

<tr>
<td><font color="#FFFFFF">2.</font></td>
<td><font color="#FFFFFF">Dr.Rajendra Kumar Aanjne</font></td>
<td><font color="#FFFFFF">Oncologist- Radiation</font></td>
<td><font color="#FFFFFF">MBBS, MD (Radiation-Oncology)</font></td>
<td><font color="#FFFFFF">+(91)-731-2362491, 4206750, 4206754</font></td>
<td><font color="#FFFFFF">C/O Choithram Hospital & Research Centre, Manik Bagh Road, Indore - 452014, Near Choithram Mandi</font></td>
</tr>

<tr>
<td><font color="#FFFFFF">3.</font></td>
<td><font color="#FFFFFF">Dr.Abdul Malik</font></td>
<td><font color="#FFFFFF">Nephrologist</font></td>
<td><font color="#FFFFFF">MBBS, MD (Nephrology)</font></td>
<td><font color="#FFFFFF">+(91)-731-4272014</font></td>
<td><font color="#FFFFFF">Patti Bazar, Mhow, Dist. Indore, Mhow Naka, Indore - 452009</font></td>
</tr>

<tr>
<td><font color="#FFFFFF">4.</font></td>
<td><font color="#FFFFFF">Dr.Acharya Charulata</font></td>
<td><font color="#FFFFFF">Allopathic Family Physician</font></td>
<td><font color="#FFFFFF">MBBS</font></td>
<td><font color="#FFFFFF"></font></td>
<td><font color="#FFFFFF"></font></td>
</tr>

<tr>
<td><font color="#FFFFFF">5.</font></td>
<td><font color="#FFFFFF">Dr.Dilip Acharya</font></td>
<td><font color="#FFFFFF">Gynaecologist</font></td>
<td><font color="#FFFFFF">MBEiS, DGO</font></td>
<td><font color="#FFFFFF">+(91)-731-2553745</font></td>
<td><font color="#FFFFFF">Chaitanya Clinic, 42g/G, Scheme No. 54, Indore, Indore Gpo, Indore - 452001 </font></td>
</tr>

<tr>
<td><font color="#FFFFFF">6.</font></td>
<td><font color="#FFFFFF">Dr.Dinesh Acharya</font></td>
<td><font color="#FFFFFF">Surgeon (MS General Surgery)</font></td>
<td><font color="#FFFFFF">MBBS. MS. FICS. FAB. FAMS</font></td>
<td><font color="#FFFFFF">9827523887</font></td>
<td><font color="#FFFFFF">Indore., Indore Gpo, , Indore, Madhya Pradesh - 452001, India</font></td>
</tr>

<tr>
<td><font color="#FFFFFF">7.</font></td>
<td><font color="#FFFFFF">Dr.Rajeev Agarwal</font></td>
<td><font color="#FFFFFF">Urologist</font></td>
<td><font color="#FFFFFF">MBBS, MS (General Surgery) M.Ch</font></td>
<td><font color="#FFFFFF">0731-2267904</font></td>
<td><font color="#FFFFFF">307, Morya Arcade, Mahatma Gandhi Road, 1/2 Old Palasia, Mahatma Gandhi Road, Indore, Madhya Pradesh 452001</font></td>
</tr>

<tr>
<td><font color="#FFFFFF">8.</font></td>
<td><font color="#FFFFFF">Dr.M.K.Acharya</font></td>
<td><font color="#FFFFFF">MBBS, MD(Anesthesiology)</font></td>
<td><font color="#FFFFFF">MBBS, MD</font></td>
<td><font color="#FFFFFF">0731-2480988</font></td>
<td><font color="#FFFFFF"> 5, Usha Nagar Main, Usha Nagar Main, Indore, Madhya Pradesh 452009</font></td>
</tr>

</table>
</body>
</html>


<?php require('footer.php');?>



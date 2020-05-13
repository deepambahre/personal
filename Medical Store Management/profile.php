<?php


require('header.php');
error_reporting(0);
session_start();
if(!isset($_SESSION['Username']))
{
	header('location:index.php');
	
}
?>
<?php
$con= mysql_connect('localhost','root','');
$db= mysql_select_db('medical');
$p="SELECT* FROM login where Username='".$_SESSION['Username']."'";
$select=mysql_query($p);

if($select and mysql_num_rows($select)>0)
{
	$row=mysql_fetch_array($select);
}



?>


<html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/careers.css">
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
<br>
<center>
<form action="profile2.php" method="post">
<table border="3" callpaddind="2" callspacing="2">
<caption><h1 style="font-size:30px;color:#F0E68C;">Profile Update</h1></caption>


<tr>
<th>FirstName</th>
<td> <input type="text" name="FirstName" placeholder="enter your name" value="<?php echo $row['FirstName']; ?>"/> 
</td>
</tr>
<tr>
<th>LastName</th>
<td> <input type="text" name="LastName" placeholder="enter your last name" value="<?php echo $row['LastName']; ?>"/>
</td>
</tr>
<tr>
<th>Username</th>
<td> <input type="text" name="Username" placeholder="enter your Username" value="<?php echo $row['Username']; ?>"/>
</td>
</tr>

<tr>
<th>Password</th>
<td> <input type="password" name="Password" placeholder="enter your Password" value="<?php echo $row['Password'];?>"/> 
</td>
</tr>
<tr>
<th>Email</th>
<td> <input type="email" name="Email" placeholder="enter your Email" value="<?php echo $row['Email']; ?>">
</td>
</tr>
<tr>
<th>Contact</th>
</td>
<td>
<input type="text" name="Contact" placeholder="enter your mobile number " value="<?php echo $row['Contact']; ?>">
</td>
</tr>
<tr>
<td colspan=2> <center> <input type="submit" name="submit" value="Submit">
                <input type="reset" name="reset" value="Reset"></center>
</td>
</tr>
</table>
</form>
</center>

<!--End right-->
</body>
</html>


<?php 

   if ( isset($_GET['result']) && $_GET['result']==0)
{

     echo "<span style='color:#008000;'> Data Not Update </span>";
}
?>

<?php require('footer.php');?>
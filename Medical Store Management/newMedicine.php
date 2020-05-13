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
<title>Indorii Medical Store</title>
<link rel="stylesheet" type="text/css" href="CSS/careers.css">
</head>
<body background="images/line_glare_light_color_background_hd-wallpaper-45215.jpg">

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
<form action="" method="post">
<table align="center" border="3px" bgcolor="#9400D3">
<br>
<caption><font color="#F0E68C" size="+2"><b>Medicine Form</b><br></font><br>
</caption>
<tr>
<td height="39"><b><font color="#F0E68C">&nbsp;&nbsp;MedicineName</font></b></td>
<td><input type="text" name="MedicineName" placeholder="enter Medicine Name" size="20px" style="height:25px" /></td>

<tr>
<td height="39"><b><font color="#F0E68C">MedicineMFD</font></b></td>
<td><input type="Date" name="MedicineMFD"placeholder="Enter Medicine MFD" size="20px" style="height:25px"/></td>
</tr>

<tr>
<td height="39"><b><font color="#F0E68C">MedicineEXP</font></b></td>
<td><input type="Date" name="MedicineEXP"placeholder="Enter Medicine EXP" size="20px" style="height:25px"/></td>
</tr>

<tr>
<th height="39"><font color="#F0E68C">MedicinePrice</font></th>
<td> <input type="number" name="MedicinePrice" placeholder="enter Medicine Price" size="20px" style="height:25px">
</td>
</tr>

<tr>
<th height="39"><font color="#F0E68C">MedicineStatus</font></th>
<td><select name="MedicineStatus">
  <option value="MedicineStatus">MedicineStatus</option>
  <option value="Available">Available</option>
  <option value="Not Available">Not Available</option>
  </select>
</td>

</td>
</tr>

<tr>
<td height="39"><b><font color="#F0E68C">MedicineQuantity</font></b></td>
<td><input type="number" name="MedicineQuantity"placeholder="Enter Medicine Quantity" size="20px" style="height:25px"/></td>
</tr>

<tr align="center">
<td height="39" colspan="2"><input type="submit" name="submit" value="Add"/>
<input type="reset" name="reset" value="Reset"/></td>
</tr>

<tr>
<td colspan="2" align="center">
<a href="forget.php" style="text-decoration:none"><font color="#F0E68C">Forget Password</font></a>
</td>
</tr>
</table>
</form>
</center>
</div>
</body>
</html>
<?php
if ( isset($_GET['result']) && $_GET['result'] == 0 )
{

     echo "<span style='color:#008000;'>Error: Please Enter Valid Info </span>";
}
?>



<?php
$con= mysql_connect('localhost','root','');
$db= mysql_select_db('deepam_medical');
//error_reporting(0);
if(isset($_POST['submit']))
{
$MedicineName= $_POST['MedicineName'];
$MedicineMFD= $_POST['MedicineMFD'];
$MedicineEXP= $_POST['MedicineEXP'];
$MedicinePrice= $_POST['MedicinePrice'];
$MedicineStatus= $_POST['MedicineStatus'];
$MedicineQuantity= $_POST['MedicineQuantity'];


$insert="INSERT INTO inventory(inventoryId,MedicineName,MedicineMFD,MedicineEXP,MedicineQuantity,MedicineStatus,MedicinePrice)VALUES('','$MedicineName','$MedicineMFD','$MedicineEXP','$MedicinePrice','$MedicineStatus','$MedicineQuantity')";
$in=mysql_query($insert);
 if(!empty($in))
    {
	echo "<span style='color:#008000;'>New Medicine Add Successfully </span>";
    }
   else
   {
	echo "Not Inserted";
   }



}
?>

<?php require('footer.php');?>
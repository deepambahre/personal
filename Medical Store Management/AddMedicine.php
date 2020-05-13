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

<td><select name="MedicineName">
  <option value="MedicineName">MedicineName</option>
  <option value="Abacavir">Abacavir</option>
  <option value="Acyclovir">Acyclovir</option>
  <option value="Aliskiren">Aliskiren</option>  
  <option value="Baclofen">Baclofen</option>
  <option value="Cialis">Cialis</option> 
  <option value="Coreg">Coreg</option>
  <option value="Depakote">Depakote</option>
  <option value="Dextromethorphan">Dextromethorphan</option>
  <option value="Elavil">Elavil</option>
  <option value="Glipizide">Glipizide</option>  
  <option value="Guaifenesin">Guaifenesin</option>  
  <option value="Hcg">Hcg</option>
  <option value="Hydroxyzine">Hydroxyzine</option>
  <option value="Hyzaar">Hyzaar</option>
  <option value="Invega">Invega</option>
  <option value="Inderal">Inderal</option>
  <option value="Intuniv">Intuniv</option>
  <option value="Jakafi">Jakafi</option>  
  <option value="Jublia">Jublia</option>
  <option value="Keppra">Keppra</option>  
  <option value="Kyprolis">Kyprolis</option>
  <option value="Lorazepam">Lorazepam</option>
  <option value="Lantus">Lantus</option>
  <option value="Motrin">Motrin</option> 
  <option value="Mybetriq">Mybetriq</option>
  <option value="Novolog">Novolog</option>
  <option value="Niacin">Niacin</option>  
  <option value="Osphena">Osphena</option>
  <option value="Opdivo">Opdivo</option> 
</select>
</td>
</tr>
<tr>
<td height="39"><b><font color="#F0E68C">MedicineQuantity</font></b></td>
<td><input type="number" name="MedicineQuantity"placeholder="Enter MedicineQuantity" size="20px" style="height:25px"/></td>
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
/* $con= mysql_connect('localhost','root','');
$db= mysql_select_db('deepam_medical'); */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "deepam_medical";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//error_reporting(0);
if(isset($_POST['submit']))
{
$MedicineName= $_POST['MedicineName'];
$MedicineQuantity= $_POST['MedicineQuantity'];


$select="select*from inventory where MedicineName='$MedicineName'";
$n = $conn->query($select);
//$n=mysql_query($select);
$p=mysqli_fetch_array($n);
$e=$p['MedicineQuantity']+ $MedicineQuantity;

$update="update inventory set MedicineQuantity='$e' where MedicineName='$MedicineName'";
$up = $conn->query($update);
//$up=mysql_query($update);
 if(!empty($update))
    {
	echo "<span style='color:#008000;'>Medicine Add Successfully </span>";
    }
   else
   {
	echo "Not Inserted";
   }



}
?>

<?php require('footer.php');?>
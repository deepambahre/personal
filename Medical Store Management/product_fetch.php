<?php
require('header.php');
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/careers.css">
</head>
<body background="images/line_glare_light_color_background_hd-wallpaper-45215.jpg">

<div id="right">
<br>
<center>
<a href="index2.php" class="btn btn-default"><font size="3" color="#009966">Home</font></a>
<a href="about.php" class="btn btn-default"><font size="3" color="#009966">AboutUs</font></a>
<a href="product.php" class="btn btn-default"><font size="3" color="#009966">Product</font></a>
<a href="contact.php" class="btn btn-default"><font size="3" color="#009966">ContactUs</font></a>
<a href="careers.php" class="btn btn-default"><font size="3" color="#009966">Careers</font></a>
<a href="help.php" class="btn btn-default"><font size="3" color="#009966">Help</font></a>
</nav>
<br>
</body>
</html>
<?php
error_reporting(0);
session_start();
/* $con= mysql_connect('localhost','root','');
$db= mysql_select_db('deepam_medical'); */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "deepam_medical";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$med =  $_GET['medicine'] ;
$select="SELECT * FROM medicinedetail where MedicineName LIKE '$med%' ";
$result = $conn->query($select);
	if(!empty($result))
	{
       ?>
       <table border="2px" align="center">
               <br/><br/>
			<tr><th colspan="7" align="center"><font color="#FFFFFF">Show Medicine Strart From <?php echo $med;?></font></th></tr>
			<tr>
               
				<th><font color="#F0E68C">MedicineId</font></th>
				<th><font color="#F0E68C">MedicineName</font></th>
                <th><font color="#F0E68C">MedicineMFD</font></th>
				<th><font color="#F0E68C">MedicineEXP</font></th>
                <th><font color="#F0E68C">MedicinePrice</font></th>
				<th><font color="#F0E68C">MedicineStatus</font></th>
                <th colspan="3"><font color="#F0E68C">Action</font></th>
				
			</tr>			
       <?php
       
		while($r=mysqli_fetch_array($result))
		{
	         
	     ?>
		<tr>
		<td><font color="#FFFFFF"><?php echo $r['MedicineId'];?></font></td>
		<td><font color="#FFFFFF"><?php echo $r['MedicineName'];?></font></td>
        <td><font color="#FFFFFF"><?php echo $r['MedicineMFD'];?></font></td>
		<td><font color="#FFFFFF"><?php echo $r['MedicineEXP'];?></font></td>  
        <td><font color="#FFFFFF"><?php echo $r['MedicinePrice'];?></font></td>
		<td><font color="#FFFFFF"><?php echo $r['MedicineStatus'];?></font></td>    
        <td><button><a href="buy.php" style="text-decoration:none"><font size="3" color="#009966">Buy It</font></a></button></td>
		</tr>
				
	<?php	
	
	}
	?>
		</table>
		
	<?php
	 }

?>


<?php require('footer.php');?>
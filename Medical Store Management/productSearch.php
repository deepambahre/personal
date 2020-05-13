
<html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/index.css">
</head>
<body background="images/line_glare_light_color_background_hd-wallpaper-45215.jpg">
</body>
</html>


<?php

/* $con= mysql_connect('localhost','root','');
$db= mysql_select_db('deepam_medical') ;*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "deepam_medical";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST['search']))
{
$search=$_POST['search'];
 $select="SELECT* FROM inventory WHERE MedicineName='$search'";
 $result = $conn->query($select);

if(!empty($result))
	{
       ?>
       <table border="2px" align="center">
               <br/><br/>
			<tr><th colspan="8" align="center"><font color="#FFFFFF">Show Available Medicine </font></th></tr>
			<tr>
               
				<th><font color="#F0E68C">inventoryId</font></th>
				<th><font color="#F0E68C">MedicineName</font></th>
                <th><font color="#F0E68C">MedicineMFD</font></th>
				<th><font color="#F0E68C">MedicineEXP</font></th>
                <th><font color="#F0E68C">MedicinePrice</font></th>
				<th><font color="#F0E68C">MedicineStatus</font></th>
                <th><font color="#F0E68C">MedicineQuantity</font></th>
                <th colspan="3"><font color="#F0E68C">Action</font></th>
				
			</tr>			
       <?php
       
		while($r=mysql_fetch_array($select))
		{
	
	     ?>
		<tr>
		<td><font color="#FFFFFF"><?php echo $r['inventoryId'];?></font></td>
		<td><font color="#FFFFFF"><?php echo $r['MedicineName'];?></font></td>
        <td><font color="#FFFFFF"><?php echo $r['MedicineMFD'];?></font></td>
		<td><font color="#FFFFFF"><?php echo $r['MedicineEXP'];?></font></td>  
        <td><font color="#FFFFFF"><?php echo $r['MedicinePrice'];?></font></td>
		<td><font color="#FFFFFF"><?php echo $r['MedicineStatus'];?></font></td> 
        <td><font color="#FFFFFF"><?php echo $r['MedicineQuantity'];?></font></td>    
        <td><button><a href="buy.php" style="text-decoration:none"><font size="3" color="#009966">Buy It</font></a></button></td>
		</tr>
				
	<?php	
	
	}
	?>
		</table>
		
	<?php
	 }

}

?>

<?php require('footer.php');?>
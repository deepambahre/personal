<?php
error_reporting(0);
require('header.php');
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
<table border="3" callpaddind="2" callspacing="2">
<caption><h1><font color="#F0E68C">Add Vendor Form</font></h1></caption>
<tr>
<th><font color="#F0E68C" size="+2">VendorName</th>
<td> <input type="text" name="VendorName" placeholder="enter Vendor name" required style="width:200px">
</td>
</tr>

<tr>
<th><font color="#F0E68C" size="+2">MedicineName</font></th>
<td> <input type="text" name="MedicineName" placeholder="enter Medicine name" required style="width:200px">
</td>
</tr>

<tr>
<th><font color="#F0E68C" size="+2">MedicinePrice</font></th>
<td> <input type="number" name="MedicinePrice" placeholder="enter Medicine Price" required style="width:200px">
</td>
</tr>

<tr>
<th><font color="#F0E68C" size="+2">Quantity</font></th>
<td> <input type="number" name="Quantity" placeholder="enter Medicine Quantity" required style="width:200px">
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
include('Class/class.db.php');
//include('class.function');
include('Class/class.validation.php');
$validation= new validation();

/* $con= mysql_connect('localhost','root','');
$db= mysql_select_db('deepam_medical'); */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "deepam_medical";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST) && !empty($_POST) );
{

	
//error_reporting(0);	
$VendorName=$_POST['VendorName'];	
$MedicineName=$_POST['MedicineName'];
$MedicinePrice=$_POST['MedicinePrice'];	
$Quantity=$_POST['Quantity'];


/*--------VendorName-------*/
        if($validation-> is_alpha($VendorName)==TRUE)
        {

        }
        else
        {
       $_SESSION['error'][] = "<p><span style='color:#008000;'>this is not alphabate</span></p>";
  
         }
/*--------MedicineName-------*/
		 if($validation-> is_alpha($MedicineName)==TRUE)
        {

        }
        else
        {
       $_SESSION['error'][] = "<p><span style='color:#008000;'>this is not alphabate</span></p>";
  
        }
/*--------MedicinePrice-------*/		
		if($validation-> is_number($MedicinePrice)==TRUE)
        {

        }
        else
        {
       $_SESSION['error'][] = "<p><span style='color:#008000;'>this is not a number</span></p>";
  
        }
/*--------Quantity-------*/		 
		if($validation-> is_number($Quantity)==TRUE)
        {

        }
        else
        {
       $_SESSION['error'][] = "<p><span style='color:#008000;'>this is not a number</span></p>";
	      
  
        }
		      
          if($_SESSION['error'] and !empty($_SESSION['error']))
          {
      
		for($i=0;$i<count($_SESSION['error']); $i++)
             {
		      echo $_SESSION['error'][$i];                         
             }
		  }
		//die();


/*validation*/

if($VName=$validation-> is_alpha($VendorName)&&
$MdName=$validation-> is_alpha($MedicineName)&&
$MPrice=$validation-> is_number($MedicinePrice)&&
$Quan=$validation-> is_number($Quantity))


              {
    
		 
    $q="INSERT INTO vendordetail(VendorId,VendorName,MedicineName,MedicinePrice,Quantity)VALUES('','$VendorName','$MedicineName','$MedicinePrice','$Quantity')";
    $insert = $conn->query($q);
      //$insert= mysql_query($q);
      if(!empty($insert))
       {
		 
       header('location:Admin2.php?result=1');	    
        }
	      else
			 {
				 header('location:vendor.php?result=0');
			 }
	
     
	

	 /*else
	 {     header('location:registration.php?result=11');
	 }*/
	
			  }
}			  

?>




<?php require('footer.php');?>
<?php

require('header.php');
error_reporting(0);
session_start();

if(!isset($_SESSION['Username']))
{ 
echo "<script>window.location.href='index.php';</script>";

//	header('location:index.php');
	
}
?>




<html>
<head>

<link rel="stylesheet" type="text/css" href="CSS/careers.css">
</head>
<body background="images/line_glare_light_color_background_hd-wallpaper-45215.jpg">

<div id="right">
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
<br>

<div id="center">
<form action="#" method="post">
<table align="center" border="3px" bgcolor="#9400D3">
<caption><font color="#F0E68C" size="+2"><b>Buy Form</b><br></font><br>
</caption>
<br><br>


<tr>
<td height="39"><b><font color="#F0E68C">&nbsp;&nbsp;MedicineName</font></b></td>

<td><select name="MedicineName[]" multiple>
  <option value="SELECT PLEASE!"><u>SELECT PLEASE!</option>
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
  <option value="Januvia">Januvia</option>   
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
 <option value="Phentermine">Phentermine</option> 
  <option value="Qsymia">Qsymia</option>
  <option value="Relafen">Relafen</option>
  <option value="Sildenafil">Sildenafil</option>  
  <option value="Topamax">Topamax</option>  
  <option value="Ultresa">Ultresa</option>
  <option value="Vicodin">Vicodin</option>
  <option value="Vancomycin">Vancomycin</option>  
  <option value="Wilate">Wilate</option>
  <option value="Xopenex">Xopenex</option> 
  <option value="Xgeva">Xgeva</option> 
  <option value="Yondelis">Yondelis</option>
  <option value="Ziac">Ziac</option>    
</select>
</td>
</tr>

<tr>
<td height="39"><b><font color="#F0E68C">&nbsp;&nbsp;MedicineQuantity</font></b></td>
<td><input type="number" name="MedicineQuantity" size="20px" style="height:25px"/></td>
</tr>

<tr align="center">
<td height="39" colspan="2"><input type="submit" name="submit" value="submit"/></td>
</tr>

</table>
</form>
</div>
</body>
</html>

<?php if ( isset($_GET['ok']) && $_GET['ok'] == 0 )
{

     echo "<span style='color:#008000;'>Update Medicine Successfully </span>";
}
?>

<?php
$con= mysql_connect('localhost','root','');
$db= mysql_select_db('deepam_medical');
if(isset($_POST['submit']))
{
/*-------COUNT ARRAY VALUE-------*/
$count= sizeof($_POST['MedicineName']);	
	
$MedicineName=implode(',',$_POST['MedicineName']);
$BuyDate= date("Y-m-d");
$MedicineQuantity=$count*($_POST['MedicineQuantity']);

foreach($_POST['MedicineName'] as $op)
{  
	$res.="'".$op."',";
	
}
$t=rtrim($res,",");
/*-----------------------Select Query-------------------------------------*/
 $select="select * from inventory where MedicineName IN ({$t})"; 
$n=mysql_query($select);
 //$v=mysql_fetch_array($n);


?>
       <table border="2px" align="center">
               <br/><br/>
			<tr><th colspan="7" align="center"><font color="#FFFFFF">Payment Detail Of <?php echo $_SESSION['Username']?></font></th></tr>
			<tr>
               
				
				<th><font color="#F0E68C">MedicineName</font></th>
                <th><font color="#F0E68C">MedicineMFD</font></th>
				<th><font color="#F0E68C">MedicineEXP</font></th>
                <th><font color="#F0E68C">MedicinePrice</font></th>
				<th><font color="#F0E68C">MedicineStatus</font></th>
                <th><font color="#F0E68C">MedicineQuantity</font></th> 
                 <th><font color="#F0E68C">BuyDate</font></th> 
              
				
			</tr>			
       <?php
	  
		while($r=mysql_fetch_array($n))
		{ 
  
	        $e=$r['MedicineQuantity']-$MedicineQuantity;
            $price=$r['MedicinePrice']*$MedicineQuantity;

	     ?>
		<tr>
		<td><font color="#FFFFFF"><?php echo $MedicineName;?></font></td>
        <td><font color="#FFFFFF"><?php echo $r['MedicineMFD'];?></font></td>
		<td><font color="#FFFFFF"><?php echo $r['MedicineEXP'];?></font></td>  
        <td><font color="#FFFFFF"><?php echo $price;?></font></td>
		<td><font color="#FFFFFF"><?php echo $r['MedicineStatus'];?></font></td>  
        <td><font color="#FFFFFF"><?php echo $MedicineQuantity;?></font></td>
        <td><font color="#FFFFFF"><?php echo $BuyDate;?></font></td>     
		</tr>
		</table>
	
	   <?php

  
 echo $insert="INSERT INTO orderdetail(orderId,MedicineName,MedicineQuantity,BuyDate,MedicinePrice,inventoryId)VALUES('','$MedicineName','$MedicineQuantity','$BuyDate','$price','".$r['inventoryId']."')"; exit;
$abp=mysql_query($insert);
  if(!empty($abp))
        {
	echo "<span style='color:#008000;'>Buy Medicine Successfully </span>";
         }
   else
     {
	echo "Not Inserted";
      }

 
/*------------------------Update Inventory----------------------------------*/ 
      
                     $update="update inventory set MedicineQuantity='$e' where MedicineName IN ({$t})";
                    $up=mysql_query($update);

                      if(!empty($up))
        {
			header('location:buy.php?ok=0');
	
         }
   else
     {
	echo "Not Updated";
      }

		}

}
?>

<?php require('footer.php');?>









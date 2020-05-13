<?php
require('header.php');
error_reporting(0);
session_start();

/*if(!isset($_SESSION['Username']))
{
	header('location:index.php');
	
}*/
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/index.css"
</head>
<body background="images/line_glare_light_color_background_hd-wallpaper-45215.jpg">
<!--Start left-->
<div id="left" align="left">
<h1>Contact Information</h1>

<h3>Indorii Medical Store</h3>
21-23, G F, Scheme No.54, Vijay Nagar, Opposite Meghdoot Garden, Indore – 452010
<b>Phone:</b> +(91)-731-4002327, 4002328
<br/>

<h3>Indorii Medical Store</h3>
38, SHIV VILAS PALACE, Rajwada Indore, Imli Bazaar Opp Mahaveer Bhawan, Indore – 452007
<b>Phone:</b> 0731-2531548, 9826075454
<br/>

<h3>Indorii Medical Store</h3>
  13 jagjivan ram nagar, Indore, Patnipura, Indore – 452007 - See more at: 
 <b>Phone:</b> 9926014572, 8989600049
<br/>

</div>
<!--End left-->

<!--Start right-->
<div id="right" align="center">
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
<br/>

<h1>Contact Us</h1>
          <form action="" method="post">
<h3>Name</h3>
          <input type="text" name="Name">
<h3>Email</h3>
          <input type="email" name="Email">
<h3>Phone</h3>
          <input type="text" name="Phone">
<h3>Comment</h3>
          <textarea name="Comment"></textarea>
          <br>
<input type="submit" name="submit" value="submit">
</form>
</div>
<!--End right-->

</body>
</html>


<?php
include('Class/class.db.php');
//include('class.function');
include('Class/class.validation.php');
$validation= new validation();

$con= mysql_connect('localhost','root','');
$db= mysql_select_db('deepam_medical');

if(isset($_POST) && !empty($_POST) );
{

	
//error_reporting(0);	
$Name=$_POST['Name'];	
$Email=$_POST['Email'];
$Phone=$_POST['Phone'];	
$Comment=$_POST['Comment'];

/*--------First Name-------*/
        if($validation-> is_alpha($Name)==TRUE)
        {

        }
        else
        {
       $_SESSION['error'][] = "<p><span style='color:#008000;'>this is not alphabate</span></p>";
  
         }
		 
/*--------Email-------*/		 
		if($validation-> is_email($Email)==TRUE)
        {

        }
        else
        {
       $_SESSION['error'][] = "<p><span style='color:#008000;'>this is not Correct Mail Address</span></p>";
  
        }
/*--------Contact No.-------*/		
		if($validation-> us_telephone_match($Phone)==TRUE)
        {

        }
        else
        {
       $_SESSION['error'][] = "<p><span style='color:#008000;'>this is not number</span></p>";
  
        }		 
		 
		 
/*--------Last Name-------*/
		 if($validation-> is_alpha($Comment)==TRUE)
        {

        }
        else
        {
       $_SESSION['error'][] = "<p><span style='color:#008000;'>this is not alphabate</span></p>";
  
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

if($Nm=$validation-> is_alpha($Name)&&
$Em=$validation-> is_email($Email)&&
$Cont=$validation-> us_telephone_match($Phone)&&
$Com=$validation-> is_alpha($Comment))
              {
    
		 
    $q="INSERT INTO contactUs(contactId,Name,Email,Phone,Comment)VALUES('','$FirstName','$Email','$Phone','$Comment')";

      $insert= mysql_query($q);
      if(!empty($insert))
       {
		 
       header('location:contact.php?cont=1');	    
        }
	      else
			 {
				 header('location:contact.php?cont=0');
			 }
	
     }
	

	 /*else
	 {     header('location:registration.php?result=11');
	 }*/
	
			  
			  
}
?>

<?php if ( isset($_GET['cont']) && $_GET['cont'] == 1 )
{

     echo "<span style='color:#FF0000;'>Information Received Successfuly</span>";
}
  
  if ( isset($_GET['cont']) && $_GET['cont'] == 0 )
           {

     echo "<span style='color:#FF0000;'>Error: Validation Problem </span>";
            }
  
?>


<?php require('footer.php'); ?>
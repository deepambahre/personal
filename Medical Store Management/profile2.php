<?php
session_start();
include('Class/class.db.php');
//include('class.function');
include('Class/class.validation.php');
$validation= new validation();

$con= mysql_connect('localhost','root','');
$db= mysql_select_db('deepam_medical');
if(isset($_POST['submit']));
{
//error_reporting(0);
$Id=$_POST['Id'];
$FirstName=$_POST['FirstName'];	
$LastName=$_POST['LastName'];
$Username=$_POST['Username'];	
$Password=$_POST['Password'];
$Email=$_POST['Email'];	
$Contact=$_POST['Contact'];





/*--------Id-------*/
        if($validation-> is_number($Id)==TRUE)
        {

        }
        else
        {
       $_SESSION['error'][] = "<p><span style='color:#008000;'>this is not number</span></p>";
  
         }

/*--------First Name-------*/
        if($validation-> is_alpha($FirstName)==TRUE)
        {

        }
        else
        {
       $_SESSION['error'][] = "<p><span style='color:#008000;'>this is not alphabate</span></p>";
  
         }
/*--------Last Name-------*/
		 if($validation-> is_alpha($LastName)==TRUE)
        {

        }
        else
        {
       $_SESSION['error'][] = "<p><span style='color:#008000;'>this is not alphabate</span></p>";
  
        }
/*--------UserName-------*/		
		if($validation-> is_alpha($Username)==TRUE)
        {

        }
        else
        {
       $_SESSION['error'][] = "<p><span style='color:#008000;'>this is not alphabate</span></p>";
  
        }
/*--------Password-------*/		 
		if($validation-> valid_pass($Password)==TRUE)
        {

        }
        else
        {
       $_SESSION['error'][] = "<p><span style='color:#008000;'>this is not number with Special Character</span></p>";
	      
  
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
		if($validation-> us_telephone_match($Contact)==TRUE)
        {

        }
        else
        {
       $_SESSION['error'][] = "<p><span style='color:#008000;'>this is not number</span></p>";
  
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

if($FName=$validation-> is_alpha($FirstName)&&
$LName=$validation-> is_alpha($LastName)&&
$Uname=$validation-> is_alpha($Username)&&
$Pass=$validation-> valid_pass($Password)&&
$Em=$validation-> is_email($Email)&&
$Cont=$validation-> us_telephone_match($Contact))


$q="update login set FirstName='$FirstName',LastName='$LastName',Username='$Username',Password='$Password',Email='$Email',Contact='$Contact' where Id='$Id'"; 
 $update= mysql_query($q);
     if(!empty($update))
     {
		 
   header('location:product.php?result=1');	    
     }
	      else
			 {
				 header('location:profile.php?result=0');
			 }
}     

    
?>
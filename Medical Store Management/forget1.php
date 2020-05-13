<?php
include('Class/class.db.php');
/*include('class.function.php');*/
include('Class/class.validation.php');
$validation= new validation();

$con= mysql_connect('localhost','root','');
$db= mysql_select_db('deepam_medical');
if(isset($_POST['change']))
{
//error_reporting(0);
$Username=$_POST['Username'];	
$Contact=$_POST['Contact'];	
$NewPassword=$_POST['NewPassword'];

/*--------UserName-------*/		
		if($validation-> is_alpha($Username)==TRUE)
        {

        }
        else
        {
       $_SESSION['error'][] = "<p><span style='color:#008000;'>this is not alphabate</span></p>";
  
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



/*validation*/

if(
$Uname=$validation-> is_alpha($Username)&&
$Cont=$validation-> us_telephone_match($Contact))

              {


if($_POST['Username'])
	 {   // Start SESSION
		 session_start();
		 $select=mysql_query("SELECT * FROM login");
		 $p= mysql_fetch_array($select); 
		
		  
		   if(is_array($p))
		  {
			  $_SESSION['Username']=$p['Username'];
			  $_SESSION['Contact']=$p['Contact'];
			  mysql_query("update login set Password='$NewPassword' where Contact='$Contact'");
			  
			  header( 'Location: index2.php?success=1' );
			  
			  
		  }
		  
		  
		    else
		  { 			  	 
					echo"User Invalid";
  
  
		  }
		  
		  
	
	  }  

			  }
			  /*else
			  {
				 header('location:registration.php?result=02');
				  
			  }*/

}
?>
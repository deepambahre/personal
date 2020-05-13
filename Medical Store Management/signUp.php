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
$FirstName=$_POST['FirstName'];	
$LastName=$_POST['LastName'];
$Username=$_POST['Username'];	
$Password=$_POST['Password'];
$ConformPassword=$_POST['ConformPassword'];
$Email=$_POST['Email'];	
$Contact=$_POST['Contact'];

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

              {
    if($Password==$ConformPassword)
     {
		 
    $q="INSERT INTO login(Id,FirstName,LastName,Username,Password,Email,Contact)VALUES('','$FirstName','$LastName','$Username','$Password','$Email','$Contact')";
    $insert = $conn->query($q); 
     //$insert= mysql_query($q);
      if(!empty($insert))
       {
		 
       header('location:index.php?result=1');	    
        }
	      else
			 {
				 header('location:registration.php?result=0');
			 }
	
     }
	

	 else
	 {     header('location:registration.php?result=11');
	 }
	
			  }
			  
}
?>
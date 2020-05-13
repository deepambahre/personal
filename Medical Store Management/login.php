<?php
include('Class/class.db.php');
/*include('class.function.php');*/
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

// Start SESSION
  error_reporting(0);
   session_start();
if(isset($_POST['submit']))
{
	
$Username=$_POST['Username'];
$_SESSION['Username'] = $Username;	
$Password=$_POST['Password'];
/*$_SESSION['Password'] = $Password;*/

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
		     if($_SESSION['error'] and !empty($_SESSION['error']))
          {
		for($i=0;$i<count($_SESSION['error']); $i++)
              {
		          echo $_SESSION['error'][$i];                         
              }
			    unset($_SESSION['error']);
		  }
		     else{

/*validation*/

  if( $Uname=$validation-> is_alpha($Username)&&
      $pass=$validation-> valid_pass($Password))
                      {
      if($_POST['Username'])
	 {   
		$select="select * from login where Username='$Username' && Password='$Password'"; 
		$result = $conn->query($select);
		//$res=mysqli_query($select);
        $row=mysqli_fetch_array($result);

      if($Username==$row['Username'] && $Password==$row['Password'])
             { 
			 
			$_SESSION['Username'] = $Username;
			
		
		      header('location:index2.php?success=1');
		
             }
			 
			 else
			 {
				 header('location:index.php?success=0');
			 }
			 
	               }
     
	 }
		              	}
			 /*else
			  {
				 header('location:registration.php?result=02');
				  
			  }*/
						
}
?>
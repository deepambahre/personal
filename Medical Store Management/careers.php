<?php
error_reporting(0);
require('header.php');
/*if(!isset($_SESSION['Username']))
{
	header('location:index.php');
	
}*/

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
<form action="" method="post" enctype="multipart/form-data">


<table border="3" callpaddind="2" callspacing="2">
<caption><h1><font color="#F0E68C">Career Form</font></h1></caption>
<tr>
<th><font color="#F0E68C" size="+2">FirstName</th>
<td> <input type="text" name="FirstName" placeholder="enter your name" required style="width:200px">
</td>
</tr>

<tr>
<th><font color="#F0E68C" size="+2">LastName</font></th>
<td> <input type="text" name="LastName" placeholder="enter your last name" required style="width:200px">
</td>
</tr>

<tr>
<th><font color="#F0E68C" size="+2">Email</font></th>
<td> <input type="email" name="Email" placeholder="enter your Email" required style="width:200px">
</td>
</tr>

<tr>
<th><font color="#F0E68C" size="+2">Password</font></th>
<td> <input type="password" name="Password" placeholder="enter your Password" required  style="width:200px">
</td>
</tr>

<tr>
<th><font color="#F0E68C" size="+2">Contact</font></th>
</td>
<td>
<input type="text" name="Contact" placeholder="enter your mobile number " required  style="width:200px">
</td>
</tr>

<tr>
<th><font color="#F0E68C" size="+2">Resume</font></th>
<td> <input type="file" name="Resume" required>
</td>
</tr>

<tr>
<td colspan=2> <center> <input type="submit" name="submit" value="Submit">
                        <input type="reset" name="reset" value="Reset">
               </center>
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

if ( isset($_GET['result']) && $_GET['result'] == 5 )
{

     echo "<span style='color:#FF0000;'>Error: Please Enter Valid Info </span>";
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
$FirstName=$_POST['FirstName'];	
$LastName=$_POST['LastName'];
$Email=$_POST['Email'];	
$Password=$_POST['Password'];
$Contact=$_POST['Contact'];
$Resume=$_FILES['Resume'];
$name1=$Resume['name'];
$tmp_path=$Resume['tmp_name'];
$path="images/$name1";
move_uploaded_file($tmp_path,$path);

if(!empty($FirstName)&&!empty($LastName)&&!empty($Email)&&!empty($Password)&&!empty($Contact))
           {
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
		
		
/*--------Email-------*/		 
		if($validation-> is_email($Email)==TRUE)
        {

        }
        else
        {
       $_SESSION['error'][] = "<p><span style='color:#008000;'>this is not Correct Mail Address</span></p>";
  
        }		

/*--------Password-------*/		 
		if($validation-> valid_pass($Password)==TRUE)
        {

        }
        else
        {
       $_SESSION['error'][] = "<p><span style='color:#008000;'>this is not number with Special Character</span></p>";
	      
  
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
			  unset($_SESSION['error']);
		  }else{
		//die();


/*validation*/

if($FName=$validation-> is_alpha($FirstName)&&
$LName=$validation-> is_alpha($LastName)&&
$Em=$validation-> is_email($Email)&&
$Pass=$validation-> valid_pass($Password)&&
$Cont=$validation-> us_telephone_match($Contact))

              {
    
		 
    echo $q="INSERT INTO careers(careersId,FirstName,LastName,Email,Password,Contact,Resume)VALUES('','$FirstName','$LastName','$Email','$Password','$Contact','$path')"; die();
      $insert = $conn->query($q);
      //$insert= mysql_query($q);
      if(!empty($insert))
       {
		 
       header('location:index2.php?result=1');	    
        }
	      else
			 {
				 header('location:careers.php?result=5');
			 }
	
			 }
	

	 /*else
	 {     header('location:registration.php?result=11');
	 }*/
	
			  }
		         	}
				else
				    {
					  //echo"Fill Empty Field";	
					}	
					
}
?>



<?php require('footer.php');?>
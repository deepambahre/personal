<?php

require('HeaderMain.php');


error_reporting(0);
session_start();

	session_destroy();
	

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
<a href="about.php" class="btn btn-default"><font size="3" color="#009966">AboutUs</font></a>
<a href="contact.php" class="btn btn-default"><font size="3" color="#009966">ContactUs</font></a>
<a href="careers.php" class="btn btn-default"><font size="3" color="#009966">Careers</font></a>
<a href="help.php" class="btn btn-default"><font size="3" color="#009966">Help</font></a>
</nav>
</center>

<center>
<form action="" method="post">
<table align="center" border="3px" bgcolor="#9400D3">
<br>
<caption><font color="#F0E68C" size="+2"><b>Admin Login Form</b><br></font><br>
</caption>
<tr>
<td height="43"><b><font color="#F0E68C">&nbsp;&nbsp;Username</font></b></td>
<td><input type="text" name="Username" placeholder="Enter Email" size="20px" style="height:25px" multiple/></td>
</tr>

<tr>
<td height="39"><b><font color="#F0E68C">Password</font></b></td>
<td><input type="password" name="Password"placeholder="Enter Password" size="20px" style="height:25px" multiple/></td>
</tr>

<tr align="center">
<td height="39" colspan="2"><input type="submit" name="submit" value="Login"/>
<input type="reset" name="reset" value="Reset"/></td>
</tr>

<tr>
<td colspan="2" align="center">
<a href="forget.php" style="text-decoration:none"><font color="#F0E68C">Forget Password</font></a>
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
if(isset($_POST['submit']))
{
//error_reporting(0);	
$Username=$_POST['Username'];
$_SESSION['Username'] = $Username;	
$Password=$_POST['Password'];


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
	 {   // Start SESSION
		 session_start();
		 $select="select * from AdminLogin where Username='$Username' && Password='$Password'";
		 $res = $conn->query($select);
		//$res=mysql_query($select);
        $row=mysqli_fetch_array($res);

      if($Username==$row['Username'] && $Password==$row['Password'])
             {
			           $_SESSION['Username'] = $Username;
		      header('location:Admin2.php?success=1');
		
             }
			 
			 else
			 {
				 header('location:Admin.php?success=0');
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
<?php require('footer.php');?>
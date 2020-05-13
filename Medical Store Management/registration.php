<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['Username']))
{
	header('location:index.php');
	
}


if ( isset($_GET['result']) && $_GET['result'] == 11 )
{

     echo "<span style='color:#FF0000;'>Error:Password And Conform Password aren't Match </span>";
}
  
  
    if ( isset($_GET['result']) && $_GET['result'] == 02 )
{

     echo "<span style='color:#FF0000;'>Error: Validation Problem </span>";
}

?>

<html>
<head>
<title>Indorii Medical Store</title>
</head>
<body background="images/rose-blurry-lights.png">


<center>
<form action="signUp.php" method="post">
<table border="3" callpaddind="2" callspacing="2">
<caption><h1><font color="#0000FF">Registration Form</font></h1></caption>
<tr>
<th><font color="#0000FF">FirstName</font></th>
<td> <input type="text" name="FirstName" placeholder="enter your name" >
</td>
</tr>

<tr>
<th><font color="#0000FF">LastName</font></th>
<td> <input type="text" name="LastName" placeholder="enter your last name" >
</td>
</tr>

<tr>
<th><font color="#0000FF">Username</font></th>
<td> <input type="text" name="Username" placeholder="enter your Username" >
</td>
</tr>

<tr>
<th><font color="#0000FF">Password</font></th>
<td> <input type="password" name="Password" placeholder="enter your Password" >
</td>
</tr>
<tr>
<th><font color="#0000FF">ConformPassword</font></th>
<td> <input type="password" name="ConformPassword" placeholder="enter your Password" >
</td>
</tr>

<tr>
<th><font color="#0000FF">Email</font></th>
<td> <input type="email" name="Email" placeholder="enter your Email">
</td>
</tr>

<tr>
<th><font color="#0000FF">Contact</font></th>
</td>
<td>
<input type="text" name="Contact" placeholder="enter your mobile number">
</td>
</tr>

<tr>
<td colspan=2> <center> <input type="submit" name="submit" value="Submit" style="color:#0000FF">
                <input type="reset" name="reset" value="Reset" style="color:#0000FF"></center>
</td>
</tr>

</table>
</form>
</center>
</body>
</html>

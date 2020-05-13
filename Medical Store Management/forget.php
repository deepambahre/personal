<?php
error_reporting(0);
session_start();
require('header.php');
if(!isset($_SESSION['Username']))
{
	header('location:index.php');
	
}
?>


<html>
<head>
</head>
<body background="images/line_glare_light_color_background_hd-wallpaper-45215.jpg">

  <!--Start Header-->
/*<div id="header">
<!--<img src="images/logo.png" height="90px" width="140px"/>-->
 <div id="title" align="center"><h> Indorii Medical Store</h>
 </div>
  </div>*/
<!--End Header-->

  <form action="forget.php" method="post">
<table align="center" border="3px" bgcolor="#9400D3">
<caption><font color="#F0E68C" size="+2"><b>Forget Form</b><br></font><br>
</caption>
<br><br>

<tr>
<td height="43"><b><font color="#F0E68C">&nbsp;&nbsp; UserName</font></b></td>
<td><input type="text" name="Username" placeholder="Enter Username" size="20px" style="height:25px" multiple/></td>
</tr>

<tr>
<td height="39"><b><font color="#F0E68C">&nbsp;&nbsp;Contact</font></b></td>
<td><input type="text" name="Contact"placeholder="Enter Contact" size="20px" style="height:25px" multiple/></td>
</tr>

<tr>
<td height="39"><b><font color="#F0E68C">&nbsp;&nbsp;NewPassword</font></b></td>
<td><input type="password" name="NewPassword"placeholder="Enter New Password" size="20px" style="height:25px" multiple/></td>
</tr>
<tr align="center">
<td height="39" colspan="2"><input type="submit" name="change" value="change"/></td>
</tr>

</table>
</form>     
    </body>
    </html>
    
    <?php
if ( isset($_GET['success']) && $_GET['success'] == 1 )
{

     echo "<span style='color:#008000;'>Password Change successfully </span>";
}

/*  if ( isset($_GET['result']) && $_GET['result'] == 02 )
{

     echo "<span style='color:#FF0000;'>Error: Validation Problem </span>";
}*/

?>
<?php require('footer.php');?>
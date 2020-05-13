<?php
error_reporting(0);
require('header.php');
session_start();
if(!isset($_SESSION['Username']))
{
	header('location:index.php');
	
}
?>
<html>
<head>
</head>
<body background="images/line_glare_light_color_background_hd-wallpaper-45215.jpg">
<br/><br/>
<!---------------------prescriptions------------------------------------------>
<form action="prescriptions2.php" id="f1" name="f1" method="POST" enctype="multipart/form-data">
<table border="3" cellspacing="3" cellpadding="3" align="center">
<caption><h1>Prescriptions Form</h1></caption>
  <tr>
    <td><label>Prescriptions</label></td>
    <td><input type="file" name="fi" id="fi" /></td>
    
  </tr>
  
  <tr>
    <td colspan="3"><center><input type="submit" name="submit" id="submit"/></center></td>
  </tr>
</table>
</form>

<!---------------------Report------------------------------------------>

<form action="prescriptions2.php" id="f1" name="f1" method="POST" enctype="multipart/form-data">
<table border="3" cellspacing="3" cellpadding="3" align="center">


  <tr>
   <td><label>Report</label></td>
    <td><input type="file" name="Report" id="Report" /></td>
  </tr>
  
  
  <tr>
    <td colspan="3"><center><input type="submit" name="save" id="save"/></center></td>
  </tr>
</table>
</form>

</body>
</html>

<?php
if ( isset($_GET['result']) && $_GET['result'] == 5 )
{

     echo "<span style='color:#FF0000;'>Error: prescriptions Not Uploaded  </span>";
}

if ( isset($_GET['result']) && $_GET['result'] == 1 )
{

     echo "<span style='color:#FF0000;'>prescriptions Uploaded Successfully </span>";
}



if ( isset($_GET['result']) && $_GET['success'] == 5 )
{

     echo "<span style='color:#FF0000;'>Error: Report Not Uploaded  </span>";
}

if ( isset($_GET['result']) && $_GET['success'] == 1 )
{

     echo "<span style='color:#FF0000;'>Report Uploaded Successfully </span>";
}


?>

<?php require('footer.php');?>
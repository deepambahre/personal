<?php
$con= mysql_connect("localhost","root","")or die(mysql_error());
$q=mysql_select_db("deepam_medical");

/*<----------------------prescriptions---------------------------> */
if(isset($_POST['submit']))
{
$file=$_FILES['fi'];
$name1=$file['name'];
$tmp_path=$file['tmp_name'];
$path="images/prescriptions/$name1";
move_uploaded_file($tmp_path,$path);

$sql=mysql_query("insert into prescriptionsDetail(prescriptionsId,prescriptions) value('','$path')");

      if(!empty($sql))
       {
		 
       header('location:prescriptions.php?result=1');	    
        }
	      else
			 {
				 header('location:prescriptions.php?result=5');
			 }
}

/*<----------------------Report---------------------------> */

if(isset($_POST['save']))
{
$Report=$_FILES['Report'];
$name2=$Report['name'];
$tmp_path1=$Report['tmp_name'];
$path1="images/prescriptions/$name2";
move_uploaded_file($tmp_path1,$path1);
$jbl=mysql_query("insert into prescriptionsDetail(prescriptionsId,Report) value('','$path1')");
         if(!empty($jbl))
       {
		 
       header('location:prescriptions.php?success=1');	    
        }
	      else
			 {
				 header('location:prescriptions.php?success=5');
			 }



			 


}



?>
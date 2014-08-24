<?php
include("db.php");
$dob1=$_POST['day'].'-'.$_POST['month'].'-'.$_POST['year'];
$insert1="update users set name='$_POST['name1']' , city='$_POST['city']' , country='$_POST['country']' , contact='$_POST['contact']' , dob='$dob1' where username='$_POST['username1'];'";
$result1=mysql_query($insert1);
if($result1)
{
echo "<script>alert(' Profile Updated Successfully ');</script>";
echo "<script>location.href='dashboard.php';</script>";
}
else
die('Could not connect: ' . mysql_error());
?>
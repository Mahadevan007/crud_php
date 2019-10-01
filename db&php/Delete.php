<?php
$Connection=mysqli_connect('127.0.0.1','root','');
$Selected=mysqli_select_db($Connection,'record');
$Delete_Record_Id = $_GET['Delete'];
$Delete_Query = "DELETE FROM stu_db WHERE id='$Delete_Record_Id'";
$Execute = mysqli_query($Connection,$Delete_Query);
header("location:view.php");
?>
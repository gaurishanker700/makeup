<?php
include '../db.php';
$id=$_GET['id'];
$sql="DELETE FROM `course` WHERE `id` = '$id'";
$result=mysqli_query($conn,$sql);
if($result){
    header("Location:/makeup/admin/viewCourse.php");
}



?>
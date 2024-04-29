<?php
include '../db.php';
$id=$_GET['id'];
$sql="DELETE FROM `blog` WHERE `id` = '$id'";
$result=mysqli_query($conn,$sql);
if($result){
    header("Location:/makeup/admin/viewBlog.php");
}



?>
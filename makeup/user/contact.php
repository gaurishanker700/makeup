<?php
include '../db.php';
if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    if(!empty($subject) && !empty($message)&&!empty($fname) && !empty($lname)&&!empty($email)){
        //insert data into database
        $sql="INSERT INTO `contact` ( `f_name`, `l_name`, `email`, `subject`, `message`) VALUES ( '$fname', '$lname', '$email', '$subject', '$message')";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo "<script>alert('inserted successfully')</script>";
            header("Location:http://localhost/makeup/user/index.php");
            
        }
        else{
            die("Error".mysqli_error($conn));
        }
}
        }

else{
    echo "<script>alert('enter all  fields')</script>";
}


?>
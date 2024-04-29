<?php
include '../db.php';
if(isset($_POST["submit"])) {
    $name=$_POST['name'];
    $heading=$_POST['heading'];
    $description = $_POST['desc'];
    $content = $_POST['content'];
    $price=$_POST['price'];
    $duration=$_POST['duration'];
    $file_name = $_FILES['bimage']['name'];
    $tmp_name = $_FILES["bimage"]["tmp_name"];  // tmp name of the file in server system
    $folder="uploads/".$file_name;   // set folder for uploaded files to be stored
    move_uploaded_file( $tmp_name, $folder); // moving temporary file to specified folder using move_
    $sql="INSERT INTO `course` ( `name`, `heading`, `description`, `content`, `price`, `duration`, `image`) VALUES ( '$name', '$heading', '$description', '$content', '$price', '$duration', '$folder')";
    $result = mysqli_query($conn, $sql);
    if($result) {
        echo "<script>alert('Course added successfully!')</script>";
        // header("Location: http://localhost/makeup/admin/Add-blog.php");
    } else{
        die("<p>Error adding Course: " . mysqli_error($conn). "</p>");
    }
    
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-3 sidebar">
                <h1>Makeup Studio</h1>
                <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link" href="/makeup/admin/admin.php"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/makeup/admin/viewAppointment.php"><i class="fas fa-calendar-alt"></i> Appointments</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"><i class="fas fa-plus"></i> Add Courses</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/makeup/admin/viewCourse.php"><i class="fas fa-eye"></i> View Courses</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="Add-blog.php"><i class="fas fa-plus"></i> Add Blogs</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/makeup/admin/viewBlog.php"><i class="fas fa-eye"></i> View Blogs</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"><i class="fas fa-plus"></i> Add Packages</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"><i class="fas fa-eye"></i> View Packages</a>
                    </li>
                    <li class="nav-item">
                <a class="nav-link" href="/makeup/admin/viewContact.php"><i class="fas fa-eye"></i> View Contacts</a>
              </li>
                  </ul>
            </div>

            <!-- Main Content -->
            
<div class="col-lg-9 main-content">
    <h2 class="mt-3">Add Course</h2>

    <form action="addCourse.php" method="POST" enctype="multipart/form-data" style="background-color: violet; padding: 20px; border-radius: 10px;">
    <div class="mb-3">
            <label for="date" class="form-label" style="color: pink;">Course Name</label>
            <input type="text" class="form-control" id="date" name="name" required style="border-color: pink;">
        </div>
        <div class="mb-3">
            <label for="blogHeading" class="form-label" style="color: pink;">Heading</label>
            <input type="text" class="form-control" id="blogHeading" name="heading" required style="border-color: pink;">
        </div>
        <div class="mb-3">
            <label for="blogDescription" class="form-label" style="color: pink;">Description</label>
            <input type="text" class="form-control" id="blogDescription" name="desc" required style="border-color: pink;">
        </div>
        <div class="mb-3">
            <label for="blogContent" class="form-label" style="color: pink;">Content</label>
            <textarea class="form-control" id="blogContent" name="content" rows="6" required style="border-color: pink;"></textarea>
        </div>
        <div class="mb-3">
            <label for="blogContent" class="form-label" style="color: pink;">Price</label>
            <textarea class="form-control" id="blogContent" name="price" rows="6" required style="border-color: pink;"></textarea>
        </div>
        <div class="mb-3">
            <label for="blogContent" class="form-label" style="color: pink;">Duration</label>
            <textarea class="form-control" id="blogContent" name="duration" rows="6" required style="border-color: pink;"></textarea>
        </div>
        
        <div class="mb-3">
            <label for="blogImage" class="form-label" style="color: pink;">Choose Image</label>
            <input class="form-control" type="file" id="blogImage" name="bimage" required style="border-color: pink;">
        </div>
        <button type="submit" name="submit" class="btn btn-primary" style="background-color: pink; border-color: pink;">Add Course</button>
    </form>
</div>

        </div>
    </div>

</body>
<script src="https://kit.fontawesome.com/57fc0d57b8.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-Yv..."></script>
</html>

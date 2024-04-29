<?php
include '../db.php';
$cid = $_GET["id"];
$edit="SELECT * FROM `course` WHERE `id`='".$cid."'";
$eres=mysqli_query($conn,$edit);
$row=mysqli_fetch_assoc($eres);



if(isset($_POST["submit"])) {
    $name=$_POST['name'];
    $heading=$_POST['heading'];
    $description = $_POST['desc'];
    $content = $_POST['content'];
    $price = $_POST['price'];
    $duration = $_POST['duration'];
    $file_name = $_FILES['bimage']['name'];
    $tmp_name = $_FILES["bimage"]["tmp_name"];  // tmp name of the file in server system
    $folder="uploads/".$file_name;   // set folder for uploaded files to be stored
    move_uploaded_file( $tmp_name, $folder); // moving temporary file to specified folder using move_
    $sql="UPDATE `course` SET `name` = '$name', `heading` = '$heading', `description` = '$description', `content` = '$content', `price` = '$price', `duration` = '$duration', `image` = '$folder' WHERE `id` = $cid";
    $result = mysqli_query($conn, $sql);
    if($result) {
        echo "<script>alert('Course updated successfully!')</script>";
        // header("Location: http://localhost/makeup/admin/Add-blog.php");
    } else{
        die("<p>Error updating Course: " . mysqli_error($conn). "</p>");
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
                      <a class="nav-link" href="/makeup/user/addCourse.php"><i class="fas fa-plus"></i> Add Courses</a>
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
    <h2 class="mt-3">Edit Course</h2>

    <form action="#" method="POST" enctype="multipart/form-data" style="background-color: violet; padding: 20px; border-radius: 10px;">
        <div class="mb-3">
            <label for="date" class="form-label" style="color: pink;">Name</label>
            <input type="text" class="form-control" value="<?php echo $row['name']; ?>" id="date" name="date" required style="border-color: pink;">
        </div>
        <div class="mb-3">
            <label for="courseHeading" class="form-label" style="color: pink;">Heading</label>
            <input type="text" class="form-control" value="<?php echo $row['heading']; ?>" id="blogHeading" name="heading" required style="border-color: pink;">
        </div>
        <div class="mb-3">
            <label for="courseDescription" class="form-label" style="color: pink;">Description</label>
            <input type="text" class="form-control" id="blogDescription" value="<?php echo $row['description']; ?>" name="desc" required style="border-color: pink;">
        </div>
        <div class="mb-3">
            <label for="courseContent" class="form-label" style="color: pink;">Content</label>
            <textarea class="form-control" id="blogContent" value="<?php echo $row['content']; ?>" name="content" rows="6" required style="border-color: pink;"><?php echo $row['content']; ?></textarea>
        </div>
        <div class="mb-3">
            <label for="courseDescription" class="form-label" style="color: pink;">Price</label>
            <input type="text" class="form-control" id="blogDescription" value="<?php echo $row['price']; ?>" name="price" required style="border-color: pink;">
        </div>
        <div class="mb-3">
            <label for="courseDescription" class="form-label" style="color: pink;">Duration</label>
            <input type="text" class="form-control" id="blogDescription" value="<?php echo $row['duration']; ?>" name="duration" required style="border-color: pink;">
        </div>
        
        
        <div class="mb-3">
            <label for="courseImage" class="form-label" style="color: pink;">Choose Image</label>
            <input class="form-control" type="file" id="blogImage" name="bimage" value="<?php echo $row['image']; ?>" required style="border-color: pink;">
        </div>
        <button type="submit" name="submit" class="btn btn-primary" style="background-color: pink; border-color: pink;">Save Update</button>
    </form>
</div>


        </div>
    </div>

</body>
<script src="https://kit.fontawesome.com/57fc0d57b8.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-Yv..."></script>
</html>

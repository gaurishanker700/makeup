
<?php
session_start();
include '../db.php';
if(!isset($_SESSION['admin'])){
echo "<script>window.location.href='Alogin.php'</script>";
}
$sql="SELECT * FROM `appointment`";
$result=mysqli_query($conn,$sql);
$app=mysqli_num_rows($result);
$sql1="SELECT * FROM `contact`";
$res=mysqli_query($conn,$sql1);
$cont=mysqli_num_rows($res);
$sql2="SELECT * FROM `blog`";
$blog=mysqli_query($conn,$sql2);
$bcount=mysqli_num_rows($blog);
$sql3="SELECT * FROM `course`";
$course=mysqli_query($conn,$sql3);
$ccount=mysqli_num_rows($course)

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
                <a class="nav-link" href="#"><i class="fas fa-home"></i> Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="viewAppointment.php"><i class="fas fa-calendar-alt"></i> Appointments</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/makeup/user/addCourse.php"><i class="fas fa-plus"></i> Add Courses</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="viewCourse.php"><i class="fas fa-eye"></i> View Courses</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/makeup/user/Add-blog.php"><i class="fas fa-plus"></i> Add Blogs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="viewBlog.php"><i class="fas fa-eye"></i> View Blogs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-plus"></i> Add Packages</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-eye"></i> View Packages</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="viewContact.php"><i class="fas fa-eye"></i> View Contacts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
              </li>
            </ul>
          </div>
      
          <!-- Main Content -->
          <div class="col-lg-9 main-content">
            <div class="row">
              <div class="col-md-4">
                <div class="card mb-3">
                  <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-home"></i> Home</h5>
                    <p class="card-text">Description of Home link</p>
                    <a href="#" class="btn btn-outline-light">Go to Home</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-3">
                  <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-calendar-alt"></i> Appointments <sup><?php echo $app ?></sup></h5>
                    <p class="card-text">See all appointments</p>
                    <a href="viewAppointment.php" class="btn btn-outline-light">View Appointments</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-3">
                  <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-plus"></i> Add Courses</h5>
                    <p class="card-text">You can Add Courses From Here</p>
                    <a href="/makeup/user/addCourse.php" class="btn btn-outline-light">Add Courses</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-3">
                  <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-eye"></i> Courses <sup><?php echo $ccount; ?></sup></h5>
                    <p class="card-text">You Can See All The Courses here.</p>
                    <a href="viewCourse.php" class="btn btn-outline-light">View Courses</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-3">
                  <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-plus"></i> Add Blogs</h5>
                    <p class="card-text">You can Add Blogs From Here</p>
                    <a href="/makeup/user/Add-blog.php" class="btn btn-outline-light">Add Blogs</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-3">
                  <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-eye"></i> Blogs <sup><?php echo $bcount ?></sup></h5>
                    <p class="card-text">You Can See All Blogs From Here..</p>
                    <a href="viewBlog.php" class="btn btn-outline-light">View Blogs</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-3">
                  <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-plus"></i> Add Packages</h5>
                    <p class="card-text">You Can Add Packages From Here</p>
                    <a href="#" class="btn btn-outline-light">Add Packages</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-3">
                  <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-eye"></i> Packages <sup>7</sup></h5>
                    <p class="card-text">You Can See All Packages From Here..</p>
                    <a href="#" class="btn btn-outline-light">View Packages</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-3">
                  <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-eye"></i> Contact <sup><?php echo $cont ?></sup></h5>
                    <p class="card-text">You Can See All Contacts From Here..</p>
                    <a href="viewContact.php" class="btn btn-outline-light">View Contact</a>
                  </div>
                </div>
              </div>
              <!-- Add more cards here for other links -->
            </div>
          </div>
        </div>
      </div>

    
</body>
<script src="https://kit.fontawesome.com/57fc0d57b8.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-Yv"

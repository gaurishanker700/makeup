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
                      <a class="nav-link" href="admin.php"><i class="fas fa-home"></i> Home</a>
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
                  </ul>
            </div>

            <!-- Main Content -->
            <div class="col-lg-9 main-content">
                
                <h2 class="mt-3">Contacts</h2>
                
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="table-dark">
                            <tr>
                            <th scope="col">Id</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Message</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include '../db.php';
                            $sql = "SELECT * FROM `contact`";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $row["id"] . "</td>";
                                    echo "<td>" . $row["f_name"] . "</td>";
                                    echo "<td>" . $row["l_name"] . "</td>";
                                    echo "<td>" . $row["email"] . "</td>";
                                    echo "<td>" . $row["subject"] . "</td>";
                                    echo "<td>" . $row["message"] . "</td>";
                                    echo "<td><a href='deletecont.php?id=" . $row["id"] . "' class='btn btn-danger'>Delete</a></td>";
                                   
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='5'>No data found</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://kit.fontawesome.com/57fc0d57b8.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-Yv..."></script>
</html>

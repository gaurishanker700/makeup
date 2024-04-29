



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
                      <a class="nav-link" href="#"><i class="fas fa-eye"></i> View Blogs</a>
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
                <!-- Blogs Heading -->
                <h2 class="mt-3">Blogs</h2>
                <!-- Blogs Table -->
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Heading</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- PHP code to fetch and display blogs -->
                            <?php
                            include '../db.php';

                            $sql = "SELECT * FROM blog";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td><img src='" . $row["image"] . "' width='100' height='100'></td>";
                                    echo "<td>" . $row["heading"] . "</td>";
                                    echo "<td>" . $row["description"] . "</td>";
                                    echo "<td>";
                                    echo "<a href='/makeup/user/editBlog.php?id=" . $row["id"] . "' class='btn btn-outline-primary'>Edit</a> <br> ";
                                    echo "<a href='deleteBlog.php?id=" . $row["id"] . "' class='btn btn-outline-danger'>Delete</a>";
                                    echo "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='4'>No blogs found</td></tr>";
                            }

                            // Close the database connection
                            mysqli_close($conn);
                            ?>
                            <!-- End of PHP code -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://kit.fontawesome.com/57fc0d57b8.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-Yv"></script>
</html>

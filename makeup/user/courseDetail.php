<?php
include '../db.php';
$course_id = $_GET['id'];
$sql = "SELECT * FROM `course` WHERE `id`='$course_id'";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FADBD8; /* Light pink background */
            color: #6C3483; /* Pink text color */
            margin: 0;
            padding: 0;
        }
        .container {
            background-color: #F8BBD0; /* Dark pink container background */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 50px auto;
            max-width: 800px;
            animation: fadeIn 0.5s ease-out; /* Fade in animation */
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .course-details {
            background-color: #E1BEE7; /* Violet course details background */
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            text-align: center; /* Center the content */
            transition: transform 0.3s ease-in-out; /* Smooth transition */
        }
        .course-details:hover {
            transform: scale(1.05); /* Scale up on hover */
        }
        .course-details img {
            max-width: 100%; /* Ensure image does not exceed container width */
            max-height: 400px; /* Set maximum height */
            border-radius: 5px;
            margin-bottom: 20px; /* Increased margin bottom */
        }
        .course-name {
            color: #8e44ad; /* Custom color for course name */
            font-size: 28px; /* Increased font size for course name */
            font-weight: bold; /* Added bold font weight */
            margin-bottom: 10px; /* Added margin bottom */
        }
        .heading {
            color: #6C3483; /* Pink text color */
            font-size: 24px; /* Increased font size for heading */
            margin-bottom: 20px; /* Added margin bottom */
        }
        .price-duration {
            font-size: 18px;
            color: #6C3483; /* Pink text color */
            margin-bottom: 15px; /* Added margin bottom */
        }
        .price-duration span {
            margin-right: 15px; /* Added margin between price and duration */
        }
        .description {
            color: #6C3483; /* Pink text color */
            line-height: 1.6; /* Increased line height for better readability */
            margin-bottom: 20px; /* Increased margin bottom */
            text-align: center; /* Align description text to center */
        }
        .content {
            color: #6C3483; /* Pink text color */
            line-height: 1.6; /* Increased line height for better readability */
            text-align: center; /* Align content text to center */
        }
        .content p {
            margin-bottom: 20px; /* Added margin bottom for content paragraphs */
        }
        .back-link {
            display: block;
            margin-top: 20px;
            text-align: center;
            color: #6C3483; /* Pink link color */
            text-decoration: none;
            font-size: 16px; /* Increased text size */
        }
    </style>
</head>
<body>

<div class="container">
    <div class="course-details">
        <img src="<?php echo $row['image']; ?>" alt="Course Image" class="img-fluid">
        <div class="course-name"><?php echo $row['name']; ?></div> <!-- Display course name with custom styling -->
        <h2 class="heading"><?php echo $row['heading']; ?></h2> <!-- Display heading with custom styling -->
        <div class="price-duration">
            <span>Price: <?php echo $row['price']; ?></span> | <span>Duration: <?php echo $row['duration']; ?> months</span>
        </div>
        <p class="description"><?php echo $row['description']; ?></p> <!-- Increased text size -->
        <div class="content">
            <p><?php echo $row['content']; ?></p>
        </div>
    </div>
    <a href="index.php" class="back-link">&larr; Back to All Courses</a>

    <div style="text-align: center; margin-top: 30px;">
    <i class="fa-solid fa-phone-volume" style="font-size: 24px; color: #6C3483;"></i>
    <span style="margin-left: 10px;">If you have any queries, feel free to call us on <a href="tel:7009101449" style="color: #6C3483; text-decoration: none; font-weight: bold;">9988945356</a></span>
</div>
</div>


</body>
<script src="https://kit.fontawesome.com/57fc0d57b8.js" crossorigin="anonymous"></script>
</html>




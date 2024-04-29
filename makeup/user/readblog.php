<?php
include '../db.php';
$bid = $_GET['id'];
$sql = "SELECT * FROM `blog` WHERE `id`='$bid'";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Read Blog</title>
<!-- Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #FADBD8; /* Light pink background */
        color: #6C3483; /* Pink text color */
    }
    .container {
        background-color: #F8BBD0; /* Dark pink container background */
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin: 50px auto;
        max-width: 800px;
    }
    .blog-item {
        background-color: #E1BEE7; /* Violet blog item background */
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
        text-align: center; /* Center the content */
    }
    .blog-item img {
        max-width: 100%; /* Ensure image does not exceed container width */
        max-height: 600px; /* Set maximum height */
        border-radius: 5px;
        margin-bottom: 20px; /* Increased margin bottom */
        display: block; /* Make the image centered */
        margin-left: auto; /* Center the image */
        margin-right: auto; /* Center the image */
    }
    .share-icons {
        text-align: center;
        margin-top: 20px;
        cursor: pointer;
    }
    .share-icon {
        display: inline-block;
        font-size: 36px; /* Increased share icon size */
        color: #6C3483; /* Pink share icon color */
        transition: color 0.3s;
    }
    .share-icon:hover {
        color: #8e44ad; /* Lighter shade of pink on hover */
    }
    .share-text {
        color: #6C3483; /* Pink text color */
        font-weight: bold;
        margin-top: 20px; /* Increased margin top */
        font-size: 18px; /* Increased text size */
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
    <div class="blog-item">
        <img src="<?php echo $row['image']; ?>" alt="Blog Image" class="img-fluid">
        <h1 class="mb-4"><?php echo $row['heading']; ?></h1> <!-- Increased heading size -->
        <h5>Author: Admin.   </h5><br>
        <p class="mb-4"><?php echo $row['description']; ?></p> <!-- Increased text size -->
        <div class="content">
            <p class="mb-4"><?php echo $row['content']; ?></p>
        </div>
    </div>
    <div class="share-icons">
        <span class="share-icon"><i class="fas fa-share" onClick="share()"></i></span> <!-- Share icon -->
        <p class="share-text">Share this blog on Instagram, Facebook, and WhatsApp</p>
    </div>
    <a href="index.php" class="back-link">&larr; Back to All Blogs</a>
</div>

</body>
<script>
async function share() {
    await navigator.share({
      title:document.title,
      url:window.location.href
    })
  } 

</script>
</html>


<?php
include '../db.php';

// Sanitize input
$cont_id = isset($_GET["id"]) ? intval($_GET["id"]) : 0;

// Prepare the SQL query
$sql = "DELETE FROM `contact` WHERE id='" . $cont_id . "'";

// Execute the query
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if ($result) {
    header("Location: http://localhost/makeup/admin/viewContact.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>

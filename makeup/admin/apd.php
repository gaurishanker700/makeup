<?php
include '../db.php';

// Sanitize input
$ap_id = isset($_GET["id"]) ? intval($_GET["id"]) : 0;

// Prepare the SQL query
$sql = "DELETE FROM `appointment` WHERE id='" . $ap_id . "'";

// Execute the query
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if ($result) {
    header("Location: http://localhost/makeup/admin/viewAppointment.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>

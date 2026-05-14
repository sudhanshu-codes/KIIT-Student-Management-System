<?php
$con = mysqli_connect("localhost", "root", "", "kiit_college");
if (!$con) die("Database connection failed");

$roll = $_GET['roll'];

$sql = "DELETE FROM students WHERE roll='$roll'";

if (mysqli_query($con, $sql)) {
    header("Location: admin_dashboard.php");
} else {
    echo "Delete failed";
}
?>

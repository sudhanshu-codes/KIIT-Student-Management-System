<?php
$con = mysqli_connect("localhost", "root", "", "kiit_college");

if (!$con) {
    die("Database connection failed");
}

$roll = $_POST['roll'];
$name = $_POST['name'];
$dept = $_POST['dept'];
$semester = $_POST['semester'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$cgpa = $_POST['cgpa'];

$sql = "UPDATE students SET 
        name='$name',
        dept='$dept',
        semester='$semester',
        address='$address',
        mobile='$mobile',
        email='$email',
        cgpa='$cgpa'
        WHERE roll='$roll'";

if (mysqli_query($con, $sql)) {
    header("Location: admin_dashboard.php");
} else {
    echo "Update failed";
}
?>

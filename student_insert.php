<?php
// Connect to database
$con = mysqli_connect("localhost", "root", "", "kiit_college");

// Check connection
if (!$con) {
    die("Database connection failed");
}

// Read form data
$roll     = $_POST['roll'];
$name     = $_POST['name'];
$dept     = $_POST['dept'];
$semester = $_POST['semester'];
$address  = $_POST['address'];
$mobile   = $_POST['mobile'];
$email    = $_POST['email'];
$cgpa     = $_POST['cgpa'];

// Insert query
$sql = "INSERT INTO students 
(roll, name, dept, semester, address, mobile, email, cgpa)
VALUES
('$roll','$name','$dept','$semester','$address','$mobile','$email','$cgpa')";

// Execute query
if (mysqli_query($con, $sql)) {
    echo "<h2>Student Record Saved Successfully</h2>";
    echo "<a href='KIITCollege.html'>Go Back</a>";
} else {
    echo "Error inserting data";
}

// Close connection
mysqli_close($con);
?>

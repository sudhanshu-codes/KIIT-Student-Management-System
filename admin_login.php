<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "kiit_college");

if (!$con) {
    die("Database connection failed");
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) == 1) {

    // Login successful
    $_SESSION['admin'] = $username;
    header("Location: admin_dashboard.php");
    exit();

} else {

    // Login failed
    echo "<script>
            alert('Invalid Username or Password');
            window.location='KIITCollege.html';
          </script>";
}

mysqli_close($con);
?>

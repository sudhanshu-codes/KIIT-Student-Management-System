<?php
$con = mysqli_connect("localhost", "root", "", "kiit_college");
if (!$con) die("Database connection failed");

$roll = $_GET['roll'];
$sql = "SELECT * FROM students WHERE roll='$roll'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Student Details</title>

<style>
    body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
        background-color: #f4f6f4;
    }

    .header {
        background-color: #0b3c2d;
        color: white;
        padding: 15px;
        text-align: center;
    }

    .main {
        display: flex;
        min-height: 90vh;
    }

    .sidebar {
        width: 230px;
        background-color: #1f6f43;
        padding: 20px;
    }

    .sidebar h2 {
        color: white;
    }

    .sidebar a {
        display: block;
        color: white;
        text-decoration: none;
        margin: 12px 0;
        font-weight: bold;
    }

    .sidebar a:hover {
        text-decoration: underline;
    }

    .content {
        flex: 1;
        padding: 30px;
    }

    table {
        background: white;
        border-collapse: collapse;
        width: 70%;
    }

    td {
        border: 1px solid #ccc;
        padding: 10px;
    }

    td:first-child {
        font-weight: bold;
        background-color: #e9f3ee;
        width: 30%;
    }
</style>
</head>

<body>

<!-- Header -->
<div class="header">
    <h1>Student Details</h1>
</div>

<!-- Layout -->
<div class="main">

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Admin Menu</h2>
        <a href="admin_dashboard.php">Back to Dashboard</a>
        <a href="KIITCollege.html">Go to Website</a>
    </div>

    <!-- Content -->
    <div class="content">
        <h2>Student Information</h2>

        <table>
            <tr><td>Roll Number</td><td><?php echo $row['roll']; ?></td></tr>
            <tr><td>Name</td><td><?php echo $row['name']; ?></td></tr>
            <tr><td>Department</td><td><?php echo $row['dept']; ?></td></tr>
            <tr><td>Semester</td><td><?php echo $row['semester']; ?></td></tr>
            <tr><td>Address</td><td><?php echo $row['address']; ?></td></tr>
            <tr><td>Mobile</td><td><?php echo $row['mobile']; ?></td></tr>
            <tr><td>Email</td><td><?php echo $row['email']; ?></td></tr>
            <tr><td>CGPA</td><td><?php echo $row['cgpa']; ?></td></tr>
        </table>
    </div>
</div>

</body>
</html>

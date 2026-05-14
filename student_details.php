<?php
$con = mysqli_connect("localhost", "root", "", "kiit_college");

if (!$con) {
    die("Database connection failed");
}

$roll = $_GET['roll'];

$sql = "SELECT * FROM students WHERE roll='$roll'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
<title>Student Details</title>

<style>
body{
font-family: Arial;
background:#f4f6f4;
}

.header{
background:#0b3c2d;
color:white;
padding:15px;
text-align:center;
}

.content{
padding:30px;
}

table{
background:white;
border-collapse:collapse;
width:60%;
}

td{
border:1px solid #ccc;
padding:10px;
}

td:first-child{
font-weight:bold;
background:#e9f3ee;
}
</style>
</head>

<body>

<div class="header">
<h1>Student Details</h1>
</div>

<div class="content">

<?php
if($row){
?>

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

<?php
}
else{
echo "<h3>No student found with this Roll Number</h3>";
}
?>

<br>
<a href="KIITCollege.php">Back to Website</a>

</div>

</body>
</html>
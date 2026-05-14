<?php
session_start();
if(!isset($_SESSION['admin'])) {
    header("Location: KIITCollege.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Student</title>
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

        .header h1 {
            margin: 0;
            font-size: 24px;
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
            margin-top: 0;
        }

        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            margin: 12px 0;
            font-weight: bold;
        }

.content {
    flex:1;
    padding:30px;
}

table {
    background:white;
    padding:20px;
}
</style>
</head>

<body>

<div class="header">
<h1>Add Student Information</h1>
</div>

<div class="main">

<div class="sidebar">
<h2>Admin Menu</h2>
<a href="admin_dashboard.php">Dashboard</a>
<a href="KIITCollege.html">Website</a>
</div>

<div class="content">

<form method="post" action="student_insert.php">
<table>
<tr>
<td>Roll Number</td>
<td><input type="text" name="roll" required></td>
</tr>

<tr>
<td>Name</td>
<td><input type="text" name="name" required></td>
</tr>

<tr>
<td>Department</td>
<td>
<input type="radio" name="dept" value="CSE"> CSE
<input type="radio" name="dept" value="IT"> IT
<input type="radio" name="dept" value="CSCE"> CSCE
<input type="radio" name="dept" value="CSSE"> CSSE
</td>
</tr>

<tr>
<td>Semester</td>
<td>
<select name="semester">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
</select>
</td>
</tr>

<tr>
<td>Address</td>
<td><textarea name="address"></textarea></td>
</tr>

<tr>
<td>Mobile</td>
<td><input type="text" name="mobile"></td>
</tr>

<tr>
<td>Email</td>
<td><input type="email" name="email"></td>
</tr>

<tr>
<td>CGPA</td>
<td><input type="text" name="cgpa"></td>
</tr>

<tr>
<td colspan="2" align="center">
<button type="submit">SAVE</button>
</td>
</tr>

</table>
</form>

</div>
</div>

</body>
</html>

<?php
$con = mysqli_connect("localhost", "root", "", "kiit_college");

if (!$con) {
    die("Database connection failed");
}

$sql = "SELECT roll FROM students ORDER BY roll ASC";
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>

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

        .sidebar a:hover {
            text-decoration: underline;
        }

        .content {
            flex: 1;
            padding: 30px;
            background-color: #f4f6f4;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            background: white;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #1f6f43;
            color: white;
        }

        a.edit {
            color: #0b3c2d;
            font-weight: bold;
            text-decoration: none;
        }

        a.edit:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

<!-- Header -->
<div class="header">
    <h1>KIIT Admin Panel</h1>
</div>

<!-- Main Layout -->
<div class="main">

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Admin Menu</h2>
        <a href="admin_dashboard.php">Student Records</a>
        <a href="KIITCollege.html">Go to Website</a>
        <a href="add_student.php">Add Student Info</a>
    </div>

    <!-- Content -->
    <div class="content">
        <h2>Student Records</h2>

 <table>
    <tr>
        <th>Roll No</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td>
        <a href="view_student.php?roll=<?php echo $row['roll']; ?>">
            <?php echo $row['roll']; ?>
        </a>
    </td>

    <td>
        <a class="edit" href="edit_student.php?roll=<?php echo $row['roll']; ?>">
            Edit
        </a>
    </td>

    <td>
        <a class="edit" href="delete_student.php?roll=<?php echo $row['roll']; ?>"
           onclick="return confirm('Are you sure you want to delete this record?');">
            Delete
        </a>
    </td>
</tr>
    <?php } ?>
</table>

    </div>
</div>

</body>
</html>

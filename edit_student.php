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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Student</title>

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
            padding: 20px;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
        }

        input, textarea {
            width: 100%;
            padding: 6px;
        }

        button {
            padding: 8px 16px;
            background-color: #1f6f43;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background-color: #145c35;
        }
        input, textarea {
    box-sizing: border-box;     /* ← usually solves 80% of the problem */
}

table {
    max-width: 680px;           /* ← or 600px – try values between 580–750 */
    margin-left: 0;
    margin-right: auto;
}
    </style>
</head>

<body>

<!-- Header -->
<div class="header">
    <h1>Edit Student Details</h1>
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
        <h2>Update Student Information</h2>

        <form method="post" action="update_student.php">
            <input type="hidden" name="roll" value="<?php echo $row['roll']; ?>">

            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" value="<?php echo $row['name']; ?>"></td>
                </tr>

                <tr>
                    <td>Department</td>
                    <td><input type="text" name="dept" value="<?php echo $row['dept']; ?>"></td>
                </tr>

                <tr>
                    <td>Semester</td>
                    <td><input type="text" name="semester" value="<?php echo $row['semester']; ?>"></td>
                </tr>

                <tr>
                    <td>Address</td>
                    <td><textarea name="address"><?php echo $row['address']; ?></textarea></td>
                </tr>

                <tr>
                    <td>Mobile</td>
                    <td><input type="text" name="mobile" value="<?php echo $row['mobile']; ?>"></td>
                </tr>

                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" value="<?php echo $row['email']; ?>"></td>
                </tr>

                <tr>
                    <td>CGPA</td>
                    <td><input type="text" name="cgpa" value="<?php echo $row['cgpa']; ?>"></td>
                </tr>

                <tr>
                    <td colspan="2" align="center">
                        <button type="submit">Update Student</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

</body>
</html>

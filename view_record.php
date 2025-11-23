<?php
session_start();
if (!isset($_SESSION['gate_pass'])) {
    header("Location: login_view.php");
    exit();
}

$conn = mysqli_connect('localhost','root','','cmc_db');
if (!$conn) { die("Connection failed: " . mysqli_connect_error()); }

$result = mysqli_query($conn, "SELECT * FROM records ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>
<head>
<title>View Records</title>
<style>
    table { width:80%; margin:auto; border-collapse:collapse; }
    th, td { border:1px solid #333; padding:10px; text-align:center; }
    th { background:lightblue; }
    h1{text-align:center;}
    a{font-size:20px;}
</style>
</head>

<body>

<h1>User Records</h1>

<table>
<tr>
    <th>ID</th>
    <th>Course</th>
    <th>Section</th>
    <th>Room</th>
    <th>Task</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['Course'] ?></td>
    <td><?= $row['Section'] ?></td>
    <td><?= $row['Room'] ?></td>
    <td><?= $row['Task'] ?></td>
</tr>
<?php } ?>

</table>

<br>
<center><a href="dashboard.php">⬅ Back to Dashboard</a></center>

</body>
</html>

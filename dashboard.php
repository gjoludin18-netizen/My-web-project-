<?php
session_start();
if (!isset($_SESSION['gate_pass']) || $_SESSION['gate_pass'] !== true) {
    header("Location: login_view.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
            padding: 50px;
        }
        nav a {
            display: inline-block;
            margin: 20px;
            font-size: 30px;
            color: blue;
            text-decoration: none;
            padding: 15px 40px;
            background: lightblue;
            border-radius: 10px;
        }
        nav a:hover{
            background:#1a9bcf;
            color:white;
        }
    </style>
</head>

<body>
<h1>📌 Dashboard</h1>
<p>Welcome, you are now logged in.</p>

<nav>
    <a href="add_record.php">Add Record</a>
    <a href="view_record.php">View Records</a>
    <a href="index.php">Logout</a>
</nav>

</body>
</html>

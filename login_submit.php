<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'cmc_db');
if (!$conn) { die("Connection failed: " . mysqli_connect_error()); }

$username = mysqli_real_escape_string($conn, $_POST['username'] ?? '');
$password = mysqli_real_escape_string($conn, $_POST['password'] ?? '');

// select by username and password (matches your simple style)
$sql = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");
$result = mysqli_fetch_assoc($sql);

if ($result) {
    $_SESSION['gate_pass'] = true;
    $_SESSION['user_id'] = $result['id'];
    header("Location: home.php");
    exit();
} else {
    echo "<div style='text-align:center;'>Login failed. <a href='login_view.php'>Back to login</a></div>";
}
?>
<nav>
        <a href="index.php">Home</a>
        <a href="registration.php">Register</a>
        <a href="login_view.php">Login</a>
</nav>

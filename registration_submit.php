<?php
$conn = mysqli_connect('localhost', 'root', '', 'cmc_db');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get POST data directly
$firstname    = $_POST['firstname'] ?? '';
$lastname     = $_POST['lastname'] ?? '';
$Age          = $_POST['Age'] ?? '';
$gender       = $_POST['gender'] ?? '';
$Year_of_Level= $_POST['Year_of_Level'] ?? '';
$Status       = $_POST['Status'] ?? '';
$Province     = $_POST['Province'] ?? '';
$Municipality = $_POST['Municipality'] ?? '';
$Baranggay    = $_POST['Baranggay'] ?? '';
$username     = $_POST['username'] ?? '';
$password     = $_POST['password'] ?? '';

// Basic required check
if ($firstname == '' || $lastname == '' || $username == '' || $password == '') {
    echo "<div style='text-align:center;'>Please fill required fields. <a href='registration.php'>Back</a></div>";
    exit;
}

// Check if username exists
$sql_check = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
if (mysqli_num_rows($sql_check) == 0) {

    $sql = "INSERT INTO users (
                firstname, lastname, Age, gender, Year_of_Level, Status,
                Province, Municipality, Baranggay, username, password
            ) VALUES (
                '$firstname', '$lastname', '$Age', '$gender', '$Year_of_Level', '$Status',
                '$Province', '$Municipality', '$Baranggay', '$username', '$password'
            )";

    if (mysqli_query($conn, $sql)) {
        echo "<div style='text-align:center;font-size:35px;'>Inserted! You can now login. <br>'</div>";
    } else {
        echo "<div style='text-align:center;'>Insert failed: " . mysqli_error($conn) . "</div>";
    }
} else {
    echo "<div style='text-align:center;font-size:35px;margin-top:50px;'>User already exists! </div>";
}
?>
<nav><a href="login_view.php">Login</a></nav>
<style>/*
    nav{
        margin-top: 20%;
            background: #21c2f3;
        
            padding: 10px;
            border-radius: 10px;
            text-align:center;
            font-size:25px;
            justify-content:center;
            width:10%;

    }*/
    nav { text-align:center; margin-bottom:50px; }
    nav a{ color:blue; font-weight:bold; text-decoration:none; font-size:45; margin:20 8px;}
    nav a:hover{ text-decoration:underline; }
    </style>
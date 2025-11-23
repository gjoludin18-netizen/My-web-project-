<?php
$conn = mysqli_connect('localhost', 'root', '', 'cmc_db');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$Course = mysqli_real_escape_string($conn, $_POST['Course'] ?? '');
$Section = mysqli_real_escape_string($conn, $_POST['Section'] ?? '');
$Room = mysqli_real_escape_string($conn, $_POST['Room'] ?? '');
$Task = mysqli_real_escape_string($conn, $_POST['Task'] ?? '');

$sql = "INSERT INTO records (Course, Section, Room, Task)
        VALUES ('$Course', '$Section', '$Room', '$Task')";

if (mysqli_query($conn, $sql)) {
    header("Location: view_record.php");
    exit();
} else {
    echo "Insert Failed: " . mysqli_error($conn);
}
?>

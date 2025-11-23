<?php
$conn = mysqli_connect('localhost', 'root', '', 'cmc_db');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$participantname = mysqli_real_escape_string($conn, $_POST['participantname'] ?? '');
$email = mysqli_real_escape_string($conn, $_POST['email'] ?? '');

if ($participantname == '' || $email == '') {
    echo "Missing fields. <a href='event.php'>Back</a>";
    exit;
}

$sql = "INSERT INTO events (participantname, email) VALUES ('$participantname', '$email')";
if (mysqli_query($conn, $sql)) {
    echo "Event registered. <a href='dashboard.php'>Back to Dashboard</a>";
} else {
    echo "Insert failed: " . mysqli_error($conn);
}
?>

<?php
session_start();
if (!isset($_SESSION['gate_pass'])) {
    header("Location: login_view.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head><title>Event Register</title></head>
<body>
<form action="event_register.php" method="post">
    <label>Participant's Name</label><br>
    <input type="text" name="participantname" required><br>

    <label>Email Address</label><br>
    <input type="email" name="email" required><br>

    <button type="submit">Submit</button>
</form>
</body>
</html>

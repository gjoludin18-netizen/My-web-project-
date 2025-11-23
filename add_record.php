<?php
session_start();
if (!isset($_SESSION['gate_pass'])) {
    header("Location: login_view.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Add Record</title>
<style>
    body { padding:50px; text-align:center; }
    form { width:400px; margin:auto; background:#fff; padding:30px; border-radius:10px; }
    input { width:90%; padding:10px; margin:10px; }
    button { padding:10px 30px; background:blue; color:white; border:none;}
</style>
</head>

<body>
<h1>Add New Record</h1>

<form action="add_record_submit.php" method="post">
    <input type="text" name="Course" placeholder="Course" required>
    <input type="text" name="Section" placeholder="Section" required>
    <input type="text" name="Room" placeholder="Room" required>
    <input type="text" name="Task" placeholder="Task" required>
    
    <button type="submit">Add</button>
      
</form>

</body>
</html>

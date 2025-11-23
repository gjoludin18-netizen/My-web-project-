<?php
session_start();

if (!isset($_SESSION['gate_pass']) || $_SESSION['gate_pass'] == false) {
    header("Location: login_view.php");
    exit();
}
?>
<style>
    h1{
    font-size:50px;
    color:blue;
    text-align:center;
    padding:50px;
    }
p{
    font-size:30px;
    color:blue;
    text-align:center;
    padding:10px;
}
nav{
    display:flex;
    font-size:30px;
    color:green;
    text-align:center;
    background-color:lightblue;
    width: 200px;
    margin:20px;
}
nav:hover{
        background-color:#1a9bcf
}
</style>

<h1>WELCOME CHOY!!!!!</h1>
<P> Have a nice day! Your now already register!</P>
<p>CMC "-Competence Meets Character"</p>

<nav>
        <a href="index.php">Logout</a><br>
</nav>
<nav>
        <a href="dashboard.php">Dashboard</a>
</nav>

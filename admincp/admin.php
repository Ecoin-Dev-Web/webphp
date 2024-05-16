<?php
session_start();

if(!isset($_SESSION['mysess']))
header("Location: login.php");
?>


<a href="logout.php">Logout</a>
<h1>Welcom to Admin</h1>
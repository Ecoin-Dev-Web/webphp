<?php
session_start();

if($_SESSION['role']!=1)
header("Location: about.php");

?>


<h1>Role 1</h1>
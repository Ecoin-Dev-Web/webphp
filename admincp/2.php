<?php
session_start();

if($_SESSION['role']!=2)
header("Location: about.php");

?>



<h1>Role 2</h1>
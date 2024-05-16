<?php
session_start();

session_destroy();

setcookie('PHPSESSID','',time()-60*60*24);
//$_SESSION['mysess'] = ''
unset($_SESSION);
//header("Location: login.php");
?>
<?php
require_once('config.php');
$email = (isset($_POST['email']))?$_POST['email']:NULL;
$pass = (isset($_POST['pass']))?$_POST['pass']:NULL;
$isOk = (isset($_POST['v']))?$_POST['v']:NULL;
if($isOk=='yes'):
    $email = trim($email);
    $pass = trim($pass);
$sql  = "SELECT `email`,`password` 
         FROM utilisateur
         WHERE `email`='$email' AND `password`='$pass' LIMIT 1";
$q = mysqli_query($connect,$sql);
$counter = mysqli_num_rows($q);
if($counter>0) header('Location:home.php');
else header('Location:file.php');



endif;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    


<form action="" method="post">
    <input type="text" name="email" placeholder="Email">
    <input type="password" name="pass" placeholder="Password">
<input type="hidden" name="v" value="yes">
    <button  type="submit">Login</button>
</form>
</body>
</html>
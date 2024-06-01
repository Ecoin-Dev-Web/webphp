<?php
require_once('config.php');
$nom = (isset($_POST['cat']))?$_POST['cat']:NULL;
$sql  = "INSERT INTO cat(id,nom) VALUES(NULL,'$nom')";
$q = mysqli_query($connect,$sql);
if($q) header('Location:add.php');

?>
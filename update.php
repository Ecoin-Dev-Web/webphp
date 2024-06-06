<?php
require_once('config.php');
$nom = (isset($_POST['cat']))?$_POST['cat']:NULL;
$id = (isset($_POST['id']))?$_POST['id']:NULL;
$sql  = "UPDATE cat SET nom='$nom' WHERE id=$id";
$q = mysqli_query($connect,$sql);
if($q) header('Location:list.php');

?>
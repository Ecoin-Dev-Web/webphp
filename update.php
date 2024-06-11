<?php
require_once('config.php');
$nom = (isset($_POST['nom']))?$_POST['nom']:NULL;
$detail = (isset($_POST['detail']))?$_POST['detail']:NULL;
$id = (isset($_POST['id']))?$_POST['id']:NULL;
$sql  = "UPDATE cat SET nom='$nom', detail='$detail' WHERE id=$id";
$q = mysqli_query($connect,$sql);
if($q) echo 1;
//header('Location:list.php');

?>
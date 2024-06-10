<?php
require_once('config.php');
$id = (isset($_GET['ecoin']))?$_GET['ecoin']:NULL;
$sql  = "DELETE FROM cat WHERE id=$id ";
$query = mysqli_query($connect,$sql);
if($query) echo "Ok Delete";
//header('Location:list.php');


?>
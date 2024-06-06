<?php
require_once('config.php');
$id = (isset($_GET['q']))?$_GET['q']:NULL;
$sql  = "DELETE FROM cat WHERE id=$id ";
$query = mysqli_query($connect,$sql);
if($query) 
header('Location:list.php');


?>
<?php
require_once('config.php');
require_once('functions.php');
$ecoin['nom'] = (isset($_POST['cat']))?$_POST['cat']:NULL;
$ecoin['detail'] = (isset($_POST['detail']))?$_POST['detail']:NULL;
$v = add($ecoin);

if($v==1)  echo "Hiiii"; //header('Location:list.php');

?>
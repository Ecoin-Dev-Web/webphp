<?php
$ck = (isset($_COOKIE['ecoin']))?$_COOKIE['ecoin']:'admin';
setcookie("ecoin",$ck,time()+60*60);
$clear  = (isset($_GET['clear']))?$_GET['clear']:null;

if($clear=='ok')
setcookie('ecoin','admin',time()-60*60*24);

?>

<a href="?clear=ok">Clear Cookies</a>
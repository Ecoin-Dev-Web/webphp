<?php
setcookie('color','red',time()+60);

$c = isset($_COOKIE['color'])?$_COOKIE['color']:null;

$mylang = isset($_GET['lang'])?$_GET['lang']:'en';

$multi = [
    'ar'=> ['welcom'=>'مرحبا بكم في موقعي','link_ar'=>'العربية','link_en'=>'الإنجليزية'],
    'en'=> ['welcom'=>'Welcom To my Web','link_ar'=>'Arabic','link_en'=>'English']
];
?>


<h1> <?=$multi[$mylang]['welcom'] ?></h1>

<li><a href="?lang=ar"><?=$multi[$mylang]['link_ar'] ?></a></li>
<li><a href="?lang=en"><?=$multi[$mylang]['link_en'] ?></a></li>





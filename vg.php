<a href="vg1.php?name=ecoin&module=web">click here</a>

<?php

$vec = ['c'=>"dave",'b'=>"ron",'a'=>"chen",'d'=>"ran"];
$str = implode(' *** ',$vec);
//echo($str);
print_r($_GET);
echo "<hr>"; 
$sss = "dave *** ron *** chen *** ran";
$vvv = explode(' *** ',$sss);
///print_r($vvv);




?>
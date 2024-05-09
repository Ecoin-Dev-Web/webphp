<?php


$x = 25;

/* if($x == 15)
  echo '15';
else if($x == 25)
  echo '25';
else if($x == 14)
  echo '14';
else echo 'Error';
 */
/* switch ($x) {
  case 15:
    echo '15';
    break;
  case 25:
    echo '25';
    break;
  case 14:
    echo '14';
    break;   
  default:
     echo 'Error';
    break;
}
 */


 $lang = ["php"=>8.3,"rust"=>3.2,"html"=>5] ; // Array Assoc

 //echo $lang["rust"];



$list_article = [
 5=> ['title'=>"my title 1",'article'=>'my new article 1',"src"=>'images/001.jpg'],
 25=> ['title'=>"my title 2",'article'=>'my new article 2',"src"=>'images/002.jpg'],
 12=> ['title'=>"my title 3",'article'=>'my new article 3',"src"=>'images/003.jpg']
];


/* for ($i=0; $i < 3 ; $i++) {   ?>
 <h3><?=  $list_article[$i]['title']   ?></h3>
 <p><?=  $list_article[$i]['article']   ?></p>
 <img src="<?=  $list_article[$i]['src']   ?>" style="width:30%">
<?php } */ ?>


<?php  /*
foreach($list_article as $key=>$data) {   ?>
 <h3><?=  $data['title'] ,$key  ?></h3>
 <p><?=  $data['article']   ?></p>
 <img src="<?=  $data['src']   ?>" style="width:30%">
<?php }*/ ?>


<?php
echo "<hr>";
$s = "Ecoin";
print_r($lang);  // var_dump
echo "<hr>";
$ss = serialize($lang);
echo $ss;
echo "<hr>";
print_r(unserialize($ss));
echo "<hr>";

echo gettype($lang);
echo "<hr>";
echo gettype($ss);
echo "<hr>";
$test = 'a:2:{s:5:"width";s:3:"100";s:6:"height";s:3:"100";}';
print_r(unserialize($test));
echo "<hr>";
$array = array ('a'=>12,'6'=>9,1,8);
$sum = $array[6]+$array[7];
echo $sum;

echo "<hr>";
$sum = 0;
$varA = array(2,4,6,3,12);
$varB = array(4,6,9,3);
$varC = array(3,2,6);
$varD = array_intersect($varA,$varB,$varC);
foreach($varD as $k => $v)
{
$sum += $k;
}
echo $sum;

echo "<hr>";

$varA = array(2,2,1,2,1,1,2,2);
$varB = array_count_values($varA);
$sum = array_sum($varB);
echo $sum;

echo "<hr>";

$array = array (1.112 => 'a', 1.2 => 'b', 1.9 => 'c');
echo count ($array);

echo $array[1];

echo "<hr>";

$vecA = array(2,1,4,2);
$vecB = array(1,2,1);
$vecC = array(1,2);
$matrix = array();
$matrix[0] = $vecA;
$matrix[1] = $vecB;
$matrix[2] = $vecC;
$sum = 0;
foreach($matrix as $val)
{
$sum += count($val);
}
echo $sum;


echo "<hr>";

$a = ['a'=>'avodado','b'=>'bamba','c'=>'calco'];
$b = ['b'=>'bamba','a'=>'avodado','c'=>'calco'];
//$a = [123,455,323];
//$b = [323,123,455];
if($a==$b)
{
echo "bamba";
}
else
{
echo "bisli";
}

echo "<hr>";

// $vec = [2=>"dave",1=>"ron",0=>"chen",3=>"ran"];

// for($i=0;$i<count($vec);$i++)
//     echo $vec[$i]." == ";
//     echo "<hr>";
// foreach($vec as $k=>$v)
//     echo $k."===>".$v."<br>";   
//     echo "<hr>";  
    $vec = ['c'=>"dave",'b'=>"ron",'a'=>"chen",'d'=>"ran"];
  //  [$a,$b,$c,$d] = $vec;
  //   list($a,$b,$c,$d) = $vec;
  //   echo "<br>a=$a";
  //   echo "<br>b=$b";
  //   echo "<br>c=$c";
  //   echo "<br>c=$d";

  echo "<pre>";
  var_dump($vec);
  echo "</pre>";

   // phpinfo();

   echo "<hr>"; 
   $vec = array('5'=>"abc",5=>"fggh");
$temp = '5';
echo $vec[$temp];

echo "<hr>"; 
$vec = array (2, 2, 4, 7, 8, 9, 12, 14);
$sum = 0;
for ($i = 0; $i < 3; $i++)
{
$sum += $vec[$vec[$i]];
}
echo $sum;
?>


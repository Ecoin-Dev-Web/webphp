
    <?php
$sum = 0;
$vecNumbers = array(2,1,4,2);
$vecLanguages = array(
"en"=>"English",
"he"=>"Hebrew",
"ru"=>"Russian",
"ro"=>"Romanian");
$vecLetters = array(
"a"=>"AAA",
"b"=>"BBB",
"c"=>"CCC",
"d"=>"DDD");
if(isset($vecNumbers['2']) && isset($vecLanguages['ru']))
$sum++;
if(isset($vecLetters['a']) &&
isset($vecNumbers[$vecNumbers[3]]))
$sum++;
if(!isset($vecLanguages['de'])) $sum++;
echo $sum;

/* 
 A. 2
B. 3
C. 4
D. 1
E. 0   */


echo "<hr>";

$sum = 0;
$vecNumbers = array(2,1,4,2);
$vecLanguages =
array("en"=>"English","he"=>"Hebrew","ru"=>"Russian","ro"=>"
Romanian");
$vecLetters =
array("a"=>"AAA","b"=>"BBB","c"=>"CCC","d"=>"DDD");
If( array_key_exists('2',$vecNumbers) &&
array_key_exists('ru',$vecLanguages)) $sum++;
If( array_key_exists('a',$vecLetters) &&
array_key_exists($vecNumbers[3],$vecNumbers)) $sum++;
if(!array_key_exists('de',$vecLanguages))
$sum++;
echo $sum;


echo "<hr>";

$sum = 0;
$vecNumbers = array(2,1,4,2);
$vecLanguages = array(
"en"=>"English", "he"=>"Hebrew",
"ru"=>"Russian","ro"=>"Romanian");
$vecLetters =
array("a"=>"AAA","b"=>"BBB","c"=>"CCC","d"=>"DDD");
if(in_array("English",$vecLanguages)) $sum++;
if(in_array("AAA",$vecLetters)) $sum++;
if(in_array("EEE",$vecLetters)) $sum++;
if(in_array('4',$vecNumbers)) $sum++;
echo $sum;

echo "<hr>";



$sum = 0;
$vec = array(1=>45,2=>3,0=>4,4=>22);
sort($vec);
foreach($vec as $k=>$v)
        {
        $sum+=$k;
        }
echo $sum;


echo "<hr>";
$sum = 0;
$vec = array(1=>45,2=>3,0=>4,4=>22);
asort($vec);
foreach($vec as $k=>$v)
{
$sum+=$k;
}
echo $sum;

echo "<hr>";

$sum = 0;
$vec = array(1=>45,8=>3,0=>4,5=>22);
shuffle($vec);
foreach($vec as $k=>$v)
{
$sum+=$k;
}
echo $sum;

echo "<hr>";

$vec=array(1,2,3,4);
foreach($vec as $k=>$v)
{
$v=8;
}
$sum=array_sum($vec);
echo $sum;

echo "<hr>";
$vec = array("pix14.png", "pix10.png", "pix3.png",
"pix1.png");
natsort($vec);
foreach($vec as $k=>$v)
{
echo $v." ";
}
    ?>

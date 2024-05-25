<?php
if(!file_exists('ecoin')){
   if(mkdir('ecoin') ) echo "Created";
   
} 

   // $test = file_put_contents('ecoin/myfile.txt'," Welcom To PHP \n",FILE_APPEND) ;
   // if($test) echo "Ok";

echo '<br>';
   $data = file_get_contents('ecoin/myfile.txt');
   echo $data;
   $data2 = explode('-',$data);
   echo '<br>';
   print_r($data2);


?>
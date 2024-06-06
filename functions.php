<?php
require_once('config.php');
function add($data){
global $connect;
$sql  = "INSERT INTO cat(id,nom,detail) VALUES(NULL,'${data['nom']}','${data['detail']}')";
$q = mysqli_query($connect,$sql);
if($q)  return 1;
return 0;
}




?>
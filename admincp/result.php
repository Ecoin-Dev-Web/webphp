<?php
$data = array();
   $data['mymail'] = isset($_POST['mail'])?$_POST['mail']:null;
   $data['mypass'] = isset($_POST['pass'])?$_POST['pass']:null;
   echo "<pre>";
   print_r($data);
   echo "</pre>";
?>
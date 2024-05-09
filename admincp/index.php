

    <?php 

    include_once('header.php');
    $p = isset($_GET['page'])?$_GET['page']:'index';
    
    ?>

 
   <?php

//include_once($p.'.php');
   switch($p){
    case 'product':
        include_once('product.php');
        break;
    case 'about':
        include_once('about.php');
        break;
    case 'contact':
        include_once('contact.php');
        break;  
    default:
           break;      
   }




    ?>


<?php   include('footer.php');  ?>

<?php require 'config/db.php';


 $pg = (isset($_GET['pg']) && !empty($_GET['pg'])? $_GET['pg']:'');
  
   switch($pg){
   	    case 'home':
               $title = 'home';
               $active = 'home';
               $content = 'view/home.php';
               $js=array("asset/js/action.js");
   	    break;

   	    default:
               $title = 'home';
               $active = 'home';
               $content = 'view/home.php';
               $js=array("asset/js/action.js");
   	    break;


   }

   include 'template/content.php';
?>
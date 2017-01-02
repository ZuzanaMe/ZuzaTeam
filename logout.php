<?php    
         session_start();                                                      
          if (true != isset($_SESSION['jmeno'])) {
             header ("Location:  index.php");
          } else {
             $_SESSION = array();
             session_destroy();
             header ("Location:  index.php");
          }  
?>
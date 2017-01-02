<?php
session_start(); 

if (!isset($_SESSION['jmeno'])) {
 header ("Location:  index.php");
 exit();
}

?>
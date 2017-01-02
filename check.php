<?php
session_start();
$user = $_SESSION['jmeno'];

if ($user == NULL) 
{
	$user = "Guest";
	$logged = false;
	$admin = 0;
} 
else
{
	$user = $_SESSION['jmeno'];
	$logged = true;
	$getUser = mysql_query("select * from rsp_users WHERE user='$user'"); 
        $q = mysql_fetch_array($getUser);   
	$admin = $q[admin];
}
?>
<?php
 require_once('dtb/mysql_c.php');
 include_once("check.php");

 if ($logged == false)
 {
   echo "<div id='tooplate_login'>";
   echo "<form method='post' name='contact' action=''>";     
   echo "&nbsp;&nbsp;<label for='author'>Jmeno :</label> <input type='text' id='author' name='user' class='required input_field' />";     
   echo "&nbsp;&nbsp;<label for='email'>Heslo:</label> <input type='password' class='validate-email required input_field' name='pass' id='email' />";
   echo "&nbsp;&nbsp;<input type='submit' value='Prihlasit se' id='submit' name='submit'/>";		
   echo "</form>";		
   echo "</div>";	     
}	 
else
{
   echo "<div id='tooplate_login'>";
   echo "<label for='author'>Prihlasen : <span style='color:#FF0000;text-align:center;'><a href='user.php'>$user</a></span></label>";
   echo "&nbsp;&nbsp;(&nbsp;<label for='author'><span style='color:#FF0000;text-align:center;'><a href='logout.php'>Odhlasit</a></span></label>&nbsp;)";
   echo "</div>";
}	

  if (isset($_POST['submit'])) { 

    $message = NULL; 

    $u = Trim($_POST['user']); 
    $p = Trim($_POST['pass']);

    if (empty($u)) {
      $u1 = FALSE;
      //$message .= '<p>Zapomnìli jste zadat <font color=red><b>uživatelské jméno</b></font>.</p>';
    } else {
      $u1 = TRUE;
    }

    if (empty($p)) {
     $p1 = FALSE;
     //$message .= '<p>Zapomnìli jste zadat <font color=red><b>heslo</b></font>.</p>';
    } else {
     $p1 = TRUE;
   }

   if (($u1 && $p1) and ((($u == "Guest") and ($p == "Guest")) or (($u == "Admin") and ($p == "Admin")))) { 
  
        $_SESSION['jmeno'] = $u;

        header ("Location:  index.php");
        exit();

    } else {
      //$message .= '<p>Špatné uživatelské <font color=red><b>jméno</b></font> nebo <font color=red><b>heslo</b></font></p>';
    }
 }

 if(isset($message)) {
   echo '<font color=black>' .$message . '</font>'; 
 }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Zuzu Team</title>
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="tooplate_wrapper">
	<div id="tooplate_header">
        <div id="site_title"><h1><a href="index.php">Zuzu Team</a></h1></div>
	
	<?php 
	  include_once('login.php'); 
	?>
	
        <div id="tooplate_menu">
            <ul>
                <li><a href="index.php">Domů</a></li>
                <li><a href="services.php">Naše Služby</a></li>
                <li><a href="gallery.php">Galerie</a></li>

		<?php 
		if($logged)
		{
		  echo "<li><a href='contact.php'>Kontakt</a></li>";
		  echo "<li><a href='order.php' class='current'>Objednavky</a></li>";
		} 
                else
		{
		  echo "<li><a href='contact.php' class='last'>Kontakt</a></li>";
		}
		?>
            </ul>    	
        </div>
    
	</div>
    
    <div id="tooplate_main">
		

        
	<div class="cleaner"></div>

        <div id="tooplate_content">
        	

	<?php

    if (isset($_GET["p"])) {  
      if($_GET["p"] == "edit") { 

	if($admin == 1) {

            if (isset($_POST["delete"])) {
             mysql_query("DELETE FROM rsp_objednavka where id='$_GET[d]'");
             header("location:order.php?p=edit");
           }
           if (isset($_POST["save"])) {

             mysql_query("update rsp_objednavka set datum='$_POST[e_datum]' WHERE id='$_GET[e]'");
             mysql_query("update rsp_objednavka set cena='$_POST[e_nazev]' WHERE id='$_GET[e]'");
             mysql_query("update rsp_objednavka set popis='$_POST[e_popis]' WHERE id='$_GET[e]'");

             header("location:order.php?p=edit");
           }

		echo "<a href='order.php'>Zpět</a><br><br>";

		$getUserID = mysql_query("select * from rsp_users WHERE user='$user'");
		$qq = mysql_fetch_array($getUserID);

		if ($admin == 0)
                $getUser = mysql_query("select * from rsp_objednavka WHERE rsp_objednavka.id_user = '$qq[id]'"); 
		else
		$getUser = mysql_query("select * from rsp_objednavka"); 

           	echo "<table align='center' border='1'";
           	echo "<tr>";     
           	echo "<th class='first' width='1%'>Id</th>";
           	echo "<th width='25%'>Uživatel</th>";
           	echo "<th width='15%'>Datum</th>"; 
           	echo "<th width='30%'>Cena</th>";
                echo "<th width='12%'>Popis</th>";
           	echo "<th width='7%'>Uložit</th>";
           	echo "<th width='7%'>Smazat</th>";
           	echo "</tr>";

		while ($q = mysql_fetch_array($getUser))
                {
             		echo "<form action='order.php?p=edit&e=$q[id]' method='post'>";  
              		echo "<tr class='row-b'>"; 
              		echo "<td class='first'>$q[id]</td>";

		        $getUserID2 = mysql_query("select * from rsp_users WHERE id='$q[id_user]'");
		        $qqq = mysql_fetch_array($getUserID2);
              		echo "<td>$qqq[user]</td>";
              		echo "<td><input type='text' name='e_datum' value='$q[datum]'></td>";
	      		echo "<td><input type='text' name='e_nazev' value='$q[cena]'></td>";
             	        echo "<td><textarea rows='1' cols='30' name='e_popis'>$q[popis]</textarea></td>";

              		echo "<td><input name='save' type='submit' value='Ulozit'/></td>"; 
              		echo "</form>";
              		echo "<form action='order.php?p=edit&d=$q[id]' method='post'>";          
              		echo "<td><input name='delete' type='submit' value='Smazat'/></td>"; 
              		echo "</form>";
              		echo "</tr>"; 
		} 

		echo "</table>";
	  } else {
            echo "<h2>Zde nemáte přístup</h2>";
        }
        }
      	if($_GET["p"] == "insert") { 

		echo "<a href='order.php'>Zpět</a><br><br>";


 		echo "<form action='order.php?p=insert' method=post>";
                ?>
                 Popis :&nbsp;&nbsp;<input type="text" name="i_popis" value="">&nbsp;&nbsp;
               <?php
               echo "<input type='submit' name='insert_objednavku' value='Pridej'>";
               echo "</form>";


               if (isset($_POST['insert_objednavku'])) { 
                 
                 $m = NULL;
                 $k = trim($_POST["i_popis"]);

                 if(empty($k)){ 
                   $k1 = FALSE;
                   $m .= '<p>Zapomněli jste zadat <b>popis</b></p>';
                 }else{
                   $k1 = TRUE;
                 }

                 if ($k1) {
		    $getUserID2 = mysql_query("select id from rsp_users WHERE user='$user'");
		    $qqq = mysql_fetch_array($getUserID2);
                    $r = mysql_query("INSERT INTO rsp_objednavka (id, id_user, datum, cena, popis) VALUES (NULL , '$qqq[id]', NOW(), '0', '$k')");  
                         
                    if ($r) 
                     echo "<p>Záznam byl přidán</p>";  
                    } else { 
                     echo "<p>Záznam nebyl přidán</p>";
                    }
                 }

                 if (isset($m)) {
                   echo '<p>', $m, '</p>';
                 } 


	}
      } 
	else 
      {
		echo "<a href='order.php?p=insert'>Vytvoření Objednávky</a><br>";
		if ($admin == 1) echo "<a href='order.php?p=edit'>Editace Objednávek</a><br>";
		echo "<br><br>";

 		$getUserID = mysql_query("select * from rsp_users WHERE user='$user'");
		$qq = mysql_fetch_array($getUserID);

		if ($admin == 0)
                $getUser = mysql_query("select * from rsp_objednavka WHERE rsp_objednavka.id_user = '$qq[id]'"); 
		else
		$getUser = mysql_query("select * from rsp_objednavka"); 

           	echo "<table align='center' border='1'";
           	echo "<tr>";     
           	echo "<th class='first' width='1%'>Id</th>";
           	echo "<th width='10%'>Uživatel</th>";
           	echo "<th width='10%'>Datum</th>"; 
           	echo "<th width='15%'>Cena</th>";
                echo "<th width='40%'>Popis</th>";
           	echo "</tr>";

		while ($q = mysql_fetch_array($getUser))
                { 
              		echo "<tr class='row-b'>"; 
              		echo "<td class='first'>$q[id]</td>";
		        $getUserID2 = mysql_query("select * from rsp_users WHERE id='$q[id_user]'");
		        $qqq = mysql_fetch_array($getUserID2);
              		echo "<td>$qqq[user]</td>";
              		echo "<td>$q[datum]</td>";
	      		echo "<td>$q[cena]</td>";
             	        echo "<td>$q[popis]</td>";

		} 

		echo "</table>";
      }
	?>


            
        </div>
        
    </div>
    
    <div id="tooplate_footer">
    	Copyright © 2016 <a href="#">Zuzu Team</a>
	</div>
        <?php require_once('dtb/mysql_d.php'); ?>
</div>
</body>
</html>
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
		  echo "<li><a href='order.php' class='last'>Objednavky</a></li>";
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
        	
            <div class="col_w900">

		<?php
                $getUser = mysql_query("select * from rsp_users WHERE user='$user'"); 
                $q = mysql_fetch_array($getUser);   

		echo "Uživatel : <span style='color:#FF0000;text-align:center;'>$q[user]</span><br>";
		echo "Email : <span style='color:#FF0000;text-align:center;'>$q[email]</span><br>";
		echo "Počet Objednávek : <span style='color:#FF0000;text-align:center;'>2</span><br>";

		echo "<br><br>Další informace...";
		?>

                <div class="cleaner h60"></div>
					
	    </div>

            
        </div>
        
    </div>
    
    <div id="tooplate_footer">
    	Copyright © 2016 <a href="#">Zuzu Team</a>
	</div>
        <?php require_once('dtb/mysql_d.php'); ?>
</div>
</body>
</html>
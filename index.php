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
                <li><a href="index.php" class="current">Domů</a></li>
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
            	<div class="col_allw280 fp_service_box">
                	<div class="con_tit_01">Kdo jsme</div>
                    <img src="images/onebit_08.png" alt="" />
                    <p>No prostě jsme nejlepší.. a hlavně to máte u nás zadara <img src="http://smileys.cz/smiles/smajlici-smich/smileys-cz-3s.gif" height="20" width="20"></p>
					<a class="more" href="services.php">Více</a>
                </div>
				
				<div class="col_allw280 fp_service_box">
                	<div class="con_tit_01">Ukázky webů</div>
                    <img src="images/onebit_15.png" alt="" />
                    <p>Všichni chodí k nám.. tak nevahejte a udělejte si přes nás taky web  </p>
                    <a class="more" href="gallery.php">Více</a>
                </div>
                
				<div class="col_allw280 fp_service_box col_last">
                	<div class="con_tit_01">Podpora</div>
                    <img src="images/onebit_17.png" alt="Image 17" />
                    <p>Dokažeme všechno pořešit.. Prostě umíme no..Juuuhuu <img src="http://l2insolence.clan.su/new_year/image022.png" height="20" width="20"> </p>
                    <a class="more" href="contact.php">Více</a>
                </div>
                
		<div class="cleaner h60"></div>
				
	    </div>
            <!--
            <div class="col_w900 col_w900_last">
            	<div class="con_tit_02">Posledni projekty</div>
                
				<div class="col_allw280 lp_box">
                    <a href="#"><img src="images/tooplate_image_01.jpg" alt="" /></a>
                    <p>Nejakej text.</p>
                    <a class="more" href="#">Vice</a>
            	</div>
                
				<div class="col_allw280 lp_box">
                    <a href="#"><img src="images/tooplate_image_02.jpg" alt="" /></a>
                    <p>Nejakej text.</p>
                    <a class="more" href="#">Vice</a>
            	</div>
				
				<div class="col_allw280 lp_box col_last">
                    <a href="#"><img src="images/tooplate_image_03.jpg" alt="" /></a>
                    <p>Nejakej text.</p>
                    <a class="more" href="#">Vice</a>
                </div>
                
				<div class="cleaner"></div>
            </div>
	    -->
            
        </div>
        
    </div>
    
    <div id="tooplate_footer">
    	Copyright © 2016 <a href="#">Zuzu Team</a>
	</div>
        <?php require_once('dtb/mysql_d.php'); ?>
</div>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Zuzu Team</title>
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" />    
    
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />

<script type="text/javascript">
$(function() {
    $('#map a').lightBox();
});
</script>
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
                <li><a href="services.php" class="current">Naše Služby</a></li>
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
    
		<div id="tooplate_content">
        	
      		<div class="col_w900">
            	<h2>O nás</h2>
                <p>Zde se možná dozvíte něco o nás pokud to sem někdo dopíše...Já to dělat nebudu :) Musím dodělat objednávky... </p>
                
		<div class="cleaner h30"></div>
                
		<h2>Naše Služby</h2>
                <p>To samý platí pro naše služby :)</p>
                
		<ul class="tooplate_list">
                    <li>Yop, jsme profíci <img src="http://l2insolence.clan.su/new_year/image022.png" height="20" width="20"></li>
                    <li>Umíme toho tolik, že Vám vypadnou oči z důlku <img src="http://velka-parba.mzf.cz/images/smajlikneww.png" height="20" width="20"></li>
                    <li>Yep Yep Yep</li>
                    <li>Again Yep</li>
                </ul>
                
                <div class="cleaner"></div>
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
	    -->
            </div>
            
        </div> <!-- end of content -->
        
    </div> <!-- end of main -->    
    <div id="tooplate_footer">
    	Copyright © 2016 <a href="#">Zuzu Team</a>
	</div> 
        <?php require_once('dtb/mysql_d.php'); ?>
</div>
</body>
</html>
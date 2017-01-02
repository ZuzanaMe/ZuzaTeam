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
    $('.lightbox').lightBox();
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
                <li><a href="services.php">Naše Služby</a></li>
                <li><a href="gallery.php" class="current">Galerie</a></li>

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
      	
        	<h2>Naše Galerie</h2> 
			<p>Zde jsou ukázky našich projektů.</p>
        
        	<div class="cleaner h30"></div>
        	
      		<div id="gallery">
				<ul>
					<li>
						<span><a href="http://twitch.tv">twitch.tv</a></span>
						<a class="lightbox" href="images/gallery/image_01_l.jpg" title="Twitch.tv">
							<img src="images/gallery/image_01_s.jpg" alt="Image 01" />
						</a>		
					</li>
					
					<li>
						<span><a href="http://csfd.cz">csfd.cz</a></span>
						<a class="lightbox" href="images/gallery/image_02_l.jpg" title="Csfd.cz">
							<img src="images/gallery/image_02_s.jpg" alt="Image 02" />
						</a>
					</li>
					
					<li class="lmb">
						<span><a href="http://livesport.cz">livesport.cz</a></span>
						<a class="lightbox" href="images/gallery/image_03_l.jpg" title="Livesport.cz">
							<img src="images/gallery/image_03_s.jpg" alt="Image 03" />
						</a>
					</li>


					<!--
					<li>
						<span><a href="#">Project IV</a></span>
						<a class="lightbox" href="images/gallery/image_04_l.jpg" title="Text k projektu......">
							<img src="images/gallery/image_04_s.jpg" alt="Image 04" />
						</a>
					</li>
					
					<li>
						<span><a href="#">Project V</a></span>
						<a class="lightbox" href="images/gallery/image_05_l.jpg" title="Text k projektu......">
							<img src="images/gallery/image_05_s.jpg" alt="Image 05" />
						</a>
					</li>
					
					<li class="lmb">
						<span><a href="#">Project VI</a></span>
						<a class="lightbox" href="images/gallery/image_06_l.jpg" title="Text k projektu......">
							<img src="images/gallery/image_06_s.jpg" alt="Image 06" />
						</a>
					</li>-->
				</ul>  
          
				<div class="cleaner"></div>
			</div>
            
        </div> <!-- end of content -->
    </div> <!-- end of main -->
    
    <div id="tooplate_footer">
    	Copyright © 2016 <a href="#">Zuzu Team</a></div>

    <?php require_once('dtb/mysql_d.php'); ?>
    
</div>


</body>
</html>
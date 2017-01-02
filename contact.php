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
                <li><a href="services.php">Naše Služby</a></li>
                <li><a href="gallery.php">Galerie</a></li>

		<?php 
		if($logged)
		{
		  echo "<li><a href='contact.php' class='current'>Kontakt</a></li>";
		  echo "<li><a href='order.php' class='last'>Objednavky</a></li>";
		} 
                else
		{
		  echo "<li><a href='contact.php' class='current'>Kontakt</a></li>";
		}
		?>
            </ul>    	
        </div>
    </div>
    
    <div id="tooplate_main">
    
		<div id="tooplate_content">
        	
      	    <h2>Kontaktní Informace</h2>
            <p></p>
            <div class="cleaner h40"></div>
        
           
           	<div class="col_w420 float_l">
                <div id="contact_form">
            
                    <h4>Kontaktní Formulář</h4>
		    <?php
  if (isset($_POST['submit'])) { 

    $message = NULL; 

    $u = Trim($_POST['author']); 
    $e = Trim($_POST['email']);
    $p = Trim($_POST['subject']);
    $t = Trim($_POST['text']);

    $e2 = preg_match('/^[A-z0-9_\-]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z.]{2,4}$/', $e);

    if (empty($e)) {
     $e1 = FALSE;
     $message .= '<p>Zapomněli jste zadat <font color=red><b>email</b></font>.</p>';
    } else {
     $e1 = TRUE;
   }

    if (empty($p)) {
     $p1 = FALSE;
     $message .= '<p>Zapomněli jste zadat <font color=red><b>predmet</b></font>.</p>';
    } else {
     $p1 = TRUE;
   }


   if ($e1 && $p1 && $e2) { 
  
	$to = "admin@zuzuteam.cz";
	$subject = $p;
	$txt = $t;
	$headers = "From: $e";

	mail($to,$subject,$txt,$headers);

    } else {
	$message .= '<p>Zadali jste spatny <font color=red><b>email</b></font>.</p>';
    }
 }

			 if(isset($message)) {
   				echo '<font color=black>' .$message . '</font>'; 
 			 }
		    ?>
                    
                    <form method="post" name="contact" action="#">

						<label for="author">Jméno :</label> <input type="text" id="author" name="author" class="required input_field" value="<?php echo $_POST['author']; ?>" />
						<div class="cleaner h10"></div>

						<label for="email">Email:<font color=red>*</font></label> <input type="text" class="validate-email required input_field" name="email" id="email" value="<?php echo $_POST['email']; ?>" />
						<div class="cleaner h10"></div>

						<label for="subject">Předmět :<font color=red>*</font></label> <input type="text" class="validate-subject required input_field" name="subject" id="subject value="<?php echo $_POST['subject']; ?>"/>
						<div class="cleaner h10"></div>

						<label for="text">Zpráva:</label> <textarea id="text" name="text" rows="0" cols="0" class="required" value="<?php echo $_POST['text']; ?>"></textarea>
						<div class="cleaner h10"></div>                

						<input type="submit" value="Odeslat" id="submit" name="submit" class="submit_btn float_l" />

						<input type="reset" value="Smazat" id="reset" name="reset" class="submit_btn float_r" />

		   </form>
<?php


?>
    
                </div> 
            </div>
            
            <div class="col_w420 float_r">
                <h4>Naše Lokace</h4>
                
				<div id="map">
                    <a href="images/map_big.jpg" title="Mapa kde sídlíme">
                        <img width="300" height="200" src="images/map_thumb.jpg" alt="Obrázek Mapy" />
                    </a>
			  </div>                
                
				<div class="cleaner h30"></div>
                
                <h6><strong>Zuzu Team</strong></h6>
                Žižkova 44 , <br />
                Praha 4, 11550 <br />
			       <br /><br />
                Tel: 608184987<br />
				Email: kontakt@zuzuteam.cz
            </div>
            
            <div class="cleaner"></div>
        </div>
        
    </div>
    
    <div id="tooplate_footer">
    	Copyright © 2016 <a href="#">Zuzu Team</a>
	</div> 
    <?php require_once('dtb/mysql_d.php'); ?>
</div>
</body>
</html>
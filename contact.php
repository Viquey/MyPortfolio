<!DOCTYPE html>

<html>
	<head>
	    <?php include('head.php');?>
	
	</head>
		<?php 
			  include("fonctionsPHP/fonctionEnvoiMail.php");
		?>
	<body>
	    
	    <?php include('menu.php');?>
	    
	    
	    
	    <!-- *********  Main part â€“ headline ********** -->
	    
	        
	        <div id="main_part_inner">
	            <div id="main_part_inner_in">
	        
	            <h2>Contact</h2>
	            
	            <!--<div class="button_main">
	                <a href="download.html" class="button_dark">DOWNLOAD</a>
	            </div>-->
	            
	            </div>
	            
	        </div>
	        
	        
	        <!-- *********  Content  ********** -->
	        
	        <div id="content_inner">
	            
	            <!-- *** contact form *** -->
	            
	           <h3>Envoyez moi un message !</h3>
	           
	           
	           <form name="mail_form" class="formit" method="post" action="<?=$_SERVER['PHP_SELF']?>" onSubmit="return verifSelection()">
	<?php
	if ($erreur_name) {
		  echo(stripslashes($erreur_name));
	} 
	else {
		if ($erreur_email1) {
		  echo(stripslashes($erreur_email1));
		} 
		else {
			if ($erreur_texte1) {
		  		echo(stripslashes($erreur_texte1));
		  	} 
		  	else {
			} 
		} 
	} 
	?>
	
	<?php
	  if ($erreur_name) {
	  	echo($icone);
	  }
	?>
			<input name="name" placeholder="VOTRE NOM" type="text" value="<?=stripslashes($_SESSION['name']);?>">
	<?php
	  if ($erreur_email1) {
	  	echo($icone);
	  }
	?>
		  	<input name="email" placeholder="EMAIL" type="text" value="<?=stripslashes($_SESSION['email']);?>">
	<?php
	  if ($erreur_texte1) {
	  	echo($icone);
	  }
	?>
			<textarea name="message" placeholder="ECRIVEZ VOTRE MESSAGE ICI"><?=stripslashes($_SESSION['message']);?></textarea>
			<input type="submit" class="button_submit" name="envoi" value="Envoyer">
	       
	       </form>
	
	            <div class="cara"></div>
	            
	            <h3>Informations</h3>
	            
	            <div class="contactinfo">
	                <span class="ico_mapmark"><b>6 allée Nicolas Fouquet<br/>
	                								 <?php espace(11);?>77380 Combs La Ville<br/>
	                								 <?php espace(11);?>FRANCE</b></span>    
	            </div>
	            
	            <div class="contactinfo">
	                <span class="ico_message"><b>sellathurai.vyach@yahoo.fr</b></span>    
	            </div>
	            
	            <div class="contactinfo">
	                <span class="ico_iphone"><b>07 86 10 11 87</b></span>    
	            </div>
	            
	            <hr class="cleanit">
	            
	            
	            <div class="mapit">
	                <iframe width="938" height="360" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1317.5695963322223!2d2.5682516272664357!3d48.6645806590696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e5e25b8b39c2f9%3A0xb8bb15ec394e48a7!2s6+All%C3%A9e+Nicolas+Fouquet!5e0!3m2!1sfr!2s!4v1404461932361"> 
	                </iframe>
	            </div>
	
	            
	            
	            
	            
	            
	        </div>
	        
	    
	    
	    <!-- *********  Footer  ********** -->
	    
	    <?php include('footer.php');?>
	         
	<script>
	// script for testimonial' tabs
	$(function() {
	    $("ul.controls").tabs("div.testimonials > div");
	});
	</script>
	
	</body>
</html>

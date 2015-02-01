<?php header( 'content-type: text/html; charset=utf-8' )?>
<!DOCTYPE html>

<html>
<head>
    <?php include('head.php');?>

</head>

<body>
    
    <?php include('menu.php');?>
    
    <!-- *********  Main part – headline ********** -->
    
        
        <div id="main_part_inner">
            <div id="main_part_inner_in">
        
            	<h2>Curriculum Vitae</h2>

            </div>
            
        </div>
        
        
        <!-- *********  Content  ********** -->
        
        <div id="content_inner">
        
        	<div class="cv_infoPerso">
				
					<imagin>&nbsp;&nbsp;Information Personelles</imagin>
					<p>
						&nbsp;&nbsp;6 all&eacute;e Nicolas Fouquet
						<br/>&nbsp;&nbsp;Combs La Ville 77380
						<br/>&nbsp;&nbsp;07 86 10 11 87 
						<br/>&nbsp;&nbsp;sellathurai.vyach@yahoo.fr
						<br/>&nbsp;&nbsp;19 ans&nbsp;&nbsp;    n&eacute; le 30/05/1995
					</p>
				
			</div>
            
            <div class="cv_contenu">
            
				<h5>Experience</h5>
				<ul>
					<li><imagin>Mai-Juin 2014 :</imagin> Stage de 7 semaines au Lyc&eacute;e L&eacute;onard De Vinci(77).</li>
				</ul>
				
				<div class="cara"></div>
				
				<h5>Formation</h5>
				<ul>
					<li><imagin>2013-2015 :</imagin><div class="cv_contenu_text"> 2&egrave;me ann&eacute;e BTS Servie informatique et aux organisations(SIO) <br/>au Lyc&eacute;e L&eacute;onard De Vinci &agrave; Melun(77).</div></li>
					<li><imagin>2010-2013 : </imagin><div class="cv_contenu_text">BAC g&eacute;n&eacute;ral scientifique sp&eacute;cialit&eacute; Sciences et vie de la Terre<br/>au Lyc&eacute;e Galil&eacute;e de Combs La Ville(77).</div></li>
				</ul>
				
				<div class="cara"></div>
				
				<h5>Comp&eacute;tences</h5>
				<ul>
					<li><imagin>Langues ma&icirc;tris&eacute;es :</imagin> fran&ccedil;ais, anglais(B2), allemand(A2)</li>
					<li><imagin>Languages connues :</imagin> PHP/HTML/CSS, SQL, PYTHON, JAVA, AJAX</li>
					<li><imagin>Framework ma&icirc;tris&eacute; :</imagin> Spring, Symfony2</li>
					<li><imagin>CMS :</imagin> Drupal, Wordpress(+ plugin WooCommerce)</li>
				</ul>
				
				<div class="cara"></div>
				
				<h5>Divers</h5>
				<ul>
					<li>Int&eacute;r&ecirc;t pour la culture informatique de mani&egrave;re g&eacute;n&eacute;rale (magazines, blogs d'informations, etc &#133;).</li>
					<li>Int&eacute;r&ecirc;t pour diverses activit&eacute;s sportives (roller, v&eacute;lo, course &agrave; pied).</li>
					<li>Poss&egrave;de le permis de conduire.</li>
				</ul>
				
				
					
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

<!DOCTYPE html>

<html lang="fr">
	<head>
	    <?php include('head.php');?>
	   
	    
	</head>
	
	<body>
	    
	    <?php include('menu.php');?>
	    
	    
	    
	    <!-- *********  Main part (slider)  ********** -->
	    
	        
	        <div id="main_part">
	            <div id="main_part_in">
	        
	            <h2>Bienvenue sur mon portfolio !</h2>
	            
	            <p>Venez d&eacute;couvrir mes nombreuses comp&eacute;tences ainsi que mes diff&eacute;rents projets.<br/>
	            Bonne visite !</p>
	            
	            </div>
	            
	            <!-- *********  bouton d'accueil  ********** -->
	            
	            <!--<div class="button_main">
	                <div class="pxline"></div>
	                <a href="download.html" class="button_dark">DOWNLOAD</a>
	            </div>-->
	            
	        </div>
	        
	        
	        <!-- *********  Content  ********** -->
	        <div class="splitLigne"></div>
	        <div id="content">
	            
	            <div class="thirds">
	                <h3>Testimonial</h3>
	                <p>J'ai beaucoup d'imagination. La curiosit&eacute; est mon ma&icirc;tre mot.</p>
	            </div>
	            
	            <div class="splitLigne"></div>
	            
	            <div class="thirds">
	                <h3>Citation pr&eacute;f&eacute;r&eacute;e</h3>
	                <p>« Bien lire l’univers, c’est bien lire la vie.  »<br/>
	                	 <?php espace(50);?><b>Victor Hugo</b></p>
	            </div>
	            
	            <div class="splitLigne"></div>
	            
	            <div class="thirds">
	                <h3>Libre pour :</h3>
	                <p>&ecirc;tre recrut&eacute; en stage.</p>
	            </div>
	            <hr class="cleanit">
	            <div class="splitLigne"></div>
	            
	            
	            <!--<div class="banner1">
	                <p>The <b>WordPress version</b> will be released in about 30 days<p>
	                <a href="download.html" class="button_dark">GRAB IT HERE</a>
	            </div>-->
	                
	                
	            <!-- ****  Recent works  ***** -->        
	            
	            <h3>Mes derniers projets en date</h3>
	            
	            <div class="fourths_portfolio">
	                <h4>Projet GETAP<br/>
	                <span>Voir le projet</span>
	                </h4>
	                <a href="getap.php"><img src="img/projets/getap/getapDisplay.png" alt="item1"></a>
	            </div>
	            
	            <div class="fourths_portfolio">
	                <h4>Projet WeOneStore<br/>
	                <span>Voir le projet</span>
	                </h4>
	                <a href="zencours.php"><img src="img/portfolio2.jpg" alt="item2"></a>
	            </div>
	
	            <hr class="cleanit">
	            
	            
	            <div class="cara"></div>
	            
	            
	            <!-- ****  About & Testimonials  ***** --> 
	            
	            
	            <div class="about_blok">
	                <h3>A propos de moi</h3>
	                <p class="about">Je suis un jeune &eacute;tudient en qu&ecirc;te de nouveaux horizons.<br/>
	                	Actuellement en 2&egrave;me ann&eacute;e de BTS service r&eacute;seaux et informatique(SIO) option d&eacute;veloppment, je ne cesse d'apprendre de nouvelles technologies, concepts qu'ils aient ou non un rapport avec l'informatique.</p>
	                
	                <a href="competence.php" class="button_light">Voir mes compétences</a>
	            </div>
	            
	            <div class="testimonials">
	                <div class="quote">Il faut savoir que j'ai commencé à coder du jour au lendemain. Je ne voulais pas de base faire mes études dans l'informatiques. Je suis arrivé ici presque par hasard et je me suis rendue compte que j'adorais ces études !<br/> Vive la prog !</div>
	                
	                <div class="quote">I didn't really like working with this company/guy (I'm still not sure if it's one-man show or two-man theatre) at all. Their cat is fine, but seriously, just shut the fuck up about her, could you?</div>
	                
	                <div class="quote">Working with these guys was the best thing I have ever done in my life. They have beautiful cat. This is stupid, why don't just use the lorem ipsum :/.</div>
	                <span class="testimonials_bottom"></span>
	                
	                <ul class="controls">
	                    <li><a href="#"></a></li>
	                    <li><a href="#"></a></li>
	                    <li><a href="#"></a></li>
	                </ul>
	                <span class="by">Mes petites anecdotes</span>
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

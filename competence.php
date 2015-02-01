<!DOCTYPE html>

<html>
<head>
    <?php include('head.php');;?>

</head>

<body>
    
    <?php  include('menu.php');?>
    
    <!-- *********  Main part â€“ headline ********** -->
    
        
        <div id="main_part_inner">
            <div id="main_part_inner_in">
        
            <h2>Comp&eacute;tences</h2>
            </div>
            
        </div>
        
        
        <!-- *********  Content  ********** -->
        
        <div id="content_inner">
            
            <!-- ***** Out team + portraits ***** -->
            
            
           <h3>Mes Comp&eacute;tences</h3>
           
           <p class="teamline">Sur cette page, vous trouverez toutes mes comp&eacute;tences en informatiques ainsi que mon parcours d'&eacute;tudient.</p>
           
           <table class="list_skill">
	           		<tr class="entete">
	           			<td>COMPETENCE</td>
	           			<td>VUE</td>
	           		</tr>
	           		<?php 
	           		
	           		include('fonctionsPHP/competence.php');
					
					/****      arrays permettant la construction du tableau comp�tence       ****/
					
					$javaEE = ["JAVA EE", "en stage"];
					$wordpress = ["Wordpress CMS", "en autodidacte", "zencours.php"];
					$spring = ["Framework Spring", "en stage", "getap.php"];
					$htmlCssPhp = ["Html/Css/Php", "en cours"];
					$javaAndroid = ["Java Android", "en cours"];
					$drupal = ["Drupal CMS", "en cours"];
					$python = ["Python", "en cours"];
					$umlDia = ["Diagramme UML", "en stage"];
					$sql = ["SQL (MySQL - SQLite)", "partout"];
					$symfony2 = ["Framework Symfony2", "en cours", "zencours.php"];
					$ajax = ["Ajax", "en cours"];
					
					$array = [$spring, $symfony2, $javaEE, $wordpress, $drupal,
								$htmlCssPhp, $ajax, $javaAndroid, $python, $umlDia, $sql];
	           		tableauCompetence($array);
	           		?>
		 	</table> 
           
           <hr class="cleanit">
            
            
            <!-- ***** History, milestones ***** -->           
           
        	<div class="history_blok">
            
            	<h3>Mon parcours</h3>
            	<img src="design/milestones.png" class="milestones">
                
	                <div class="milestone1">
	                    <h4 class="miles">
	                        <b>06/2013</b> <br/>
	                        Bac S
	                    </h4>
	                    <p class="descr">Mon ticket d'entr&eacute; pour les &eacute;tudes sup&eacute;rieurs !</p>
	                </div>
				
				<div class="milestone2">
                    <h4 class="miles">
                        <b>05-06/2014</b> <br/>
                        Stage de 7 semaines
                    </h4>
                    <p class="descr">D&eacute;veloppement en <b>JAVA</b> sur le projet <b>GeTAP</b></p>
                </div>
                
                <div class="milestone3">
                    <h4 class="miles">
                        <b>2013/2015</b> <br/>
                        Etudes d'informatiques
                    </h4>
                    <p class="descr">Je viens de commencer ma <b>2ème ann&eacute;e</b>.</p>
                </div>
                
                <div class="milestone4">
                    <h4 class="miles">
                        <b>06/2015</b> <br/>
                        Proablement mon BTS
                    </h4>
                    <p class="descr">J'ai plutôt de très <b>bonne notes</b> donc ça devrait le faire !</p>
                </div>
                
                <hr class="cleanit">
            
        	</div>
        
            
	        <div class="moreabout">
	            <p>Retrouvez tous les d&eacute;tails concernant mon parcours sur la page CV !</p>
	        </div>
        
        
	        <!-- ***** Services ***** -->
	        
	        
	        <!--<h3>###</h3>
	        
	        <a href="#" class="services_list">
	            <span class="ico_paperplane"><b>Making absolutely amazing paperplanes</b></span>
	        </a>
	        
	        <a href="#" class="services_list">
	            <span class="ico_iphone"><b>Creating the best mobile apps ever!</b></span>    
	        </a>
	        
	        <a href="#" class="services_list">
	            <span class="ico_food"><b>Didnâ€™t expect cooking? Well you should have!</b></span>    
	        </a>
	        
	        <a href="#" class="services_list">
	            <span class="ico_message"><b>Clicking, double-clicking, sending e-mails, ...</b></span>
	        </a>
	        
	        <a href="#" class="services_list">
	            <span class="ico_mapmark" style="padding-top: 30px;"><b>Finding Nemo</b></span>    
	        </a>
	        
	        <a href="#" class="services_list">
	            <span class="ico_shop"><b>Making outstanding e-commerce websites</b></span>    
	        </a>-->
            
        </div>
        
    
    
    <!-- *********  Footer  ********** -->
    
    <?php include('footer.php');?>
         

</body>
</html>

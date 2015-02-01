<!DOCTYPE html>
<?php header( 'content-type: text/html; charset=utf-8' )?>

<html>
	<head>
    	<?php include('head.php');?>

	</head>
	<body>
	    
	    <?php include('menu.php');?>
	    
	    
	    
	    <!-- *********  Main part â€“ headline ********** -->
	    
	        
	        <div id="main_part_inner">
	            <div id="main_part_inner_in">
					<h2>Projet <span style="color: #e66e0d">Getap</span></h2>
				</div>
			 </div>
	        
	        
	        <!-- *********  Content  ********** -->
	        <?php  ?>
	        <div id="content_inner">
	            
	            <?php include('projetLi.php')?>
	            
	            <!-- **** Items **** -->
	            
	            <div class="projet_super_contenu">
					<div class="projet_contenu">
			            <div class="projet_contenu_images">
			                <h4>image 1<br/>Page d'accueil de Getap<br/>
			                <span>Cliquez pour aggrandir</span>
			                </h4>
			                <a href="img/projets/getap/screenGetap.png" rel='gallery' class='pirobox_gall'><img src="img/projets/getap/screenGetap.png" alt="item1"></a>
			                <p>Page d'accueil de GeTAP</p>
						</div>
						
						<h5>Qu'est ce que GeTAP ?</h5>
			            <p>
		            		GeTAP est une application de Gestion de Temps d'Accompagnement Personnalisé pour les besoins d'un établissement scolaire.
							<br/>L'objectif principal est de reconnaître l'investissement d'un élève dans des activités vécues hors du cadre habituel réservé à cet usage 
							(inscrit dans son emploi du temps hebdomadaire).
							<br/><br/>L'élève est au centre de ce dispositif, il en est l'acteur principal.
							<br/>L'élève, après s'être investi dans une activité d'accompagnement, déclare sa participation à cette activé.
							<br/>Vous pouvez accéder à la page d'accueil de GeTAP <a href="http://getap.vinci-melun.org/getap/app/login/index" onclick="window.open(this.href); return false;">ici</a><br/>
						</p> 
		            </div>
		            <hr class="cleanit">
		            <!-- *********  Paragraphe nécessaire pour écrire en bas à la suite des images  *********-->
		            <p>
		            	Mon objectif sur ce projet était la création d'un nouveau service pour le système : les statistiques c'est à dire la création de tableau selon des filtres que l'administrateur du système sera le seul à y accéder.<br/>
		            	Je travaillais avec l'aide d'un autre stagiaire sur ce projet.
		           	</p>
		           	
	            </div>
	            
	            <div class="cara"></div>
	            <hr class="cleanit">
	            
	            <div class="projet_super_contenu">
		            <div class="projet_contenu">
			            <div class="projet_contenu_images">
			                <h4>image 2<br/>Interface d'Eclipse <br/>JAVA EE<br/>
			                <span>Cliquez pour aggrandir</span>
			                </h4>
			                <a href="img/projets/getap/screenEclipse.png" rel='gallery' class='pirobox_gall'><img src="img/projets/getap/screenEclipse.png" alt="item2"></a>
			                <p>L'IDE Eclipse avec JAVA EE</p>
			            </div>
			           	
			           	<h5>Le développement</h5>
		            	<p>
		            		Mes premières semaines de travaille ont servit à se familiariser avec le système avec son étude. J'ai d'abord étudié le schéma relationel du système pour m'appropier tous ses vocabulaires	ainsi que son mode de fonctionnement (ce qui m'a été d'ailleurs très utiles lors des créations de requêtes SQL plus tards).
		            	</p>
		            	<p>Ce nouveau service à été développé en majeur partie en pair-programming, c'est à dire que je travaillais avec un autre stagiaire sur le même poste de travail.</p>
			       	</div>
			       	<hr class="cleanit">
		            <p>
		            </p>
	            </div>
	            
	            <div class="cara"></div>
	            <hr class="cleanit">
	            
	            <div class="projet_super_contenu">
		            <div class="projet_contenu">
		            
			            <div class="projet_contenu_images">
			                <h4>image 3<br/>Déposit de Getap sous GitHub<br/>
			                <span>Cliquez pour aggrandir</span>
			                </h4>
			                <a href="img/projets/getap/screenGitHub.png" rel='gallery' class='pirobox_gall'><img src="img/projets/getap/screenGitHub.png" alt="item3"></a>
			                <p>Déposite GeTAP sur GitHub</p>
			            </div>
			            <div class="projet_contenu_images">
			                <h4>image 4<br/>Tableau de bord Trello de GeTAP<br/>
			                <span>Cliquez pour aggrandir</span>
			                </h4>
			                <a href="img/projets/getap/screenTrello.png" rel='gallery' class='pirobox_gall'><img src="img/projets/getap/screenTrello.png" alt="item4"></a>
			                <p>L'interface Trello de GeTAP</p>
			            </div>
			            <h5>Mon environnement de travail</h5>
			            <p>
			            	Pour développer, j'ai utilisé l'IDE Eclipse avec JAVA EE. J'ai utilisé avec la machine virtuelle de Eclipse JAVA EE Tomcat 6.0 pour tester directement l'application web sur mon poste de travail à travers le navigateur web Mozilla Firefox.<br/>
			            	Pour optimiser au mieux le travail, mon partenaire et moi-même avons utilisé l'application web Trello afin de gérer nos différents tâches à accomplir.<br/>
			            	Un gestionnaire de version de fichiers du système nous à été imposer qui se trouve sous GitHub. Cela m'a permis de travailler efficacement<br/><?php espace(159);?> avec mon partenaire.
			            	
			            </p>
		            </div>
		            <hr class="cleanit">
		            <p>
			        </p>
	            </div>
	
	        </div>
	        
	    
	    
	    <!-- *********  Footer  ********** -->
	    <?php include('js/plugin.php');?>
	    <?php include('footer.php');?>
	
	</body>
</html>





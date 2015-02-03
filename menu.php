<?php include('fonctionsPHP/fonctionIfBonnePage.php') ?> 
<!-- *********  Header  ********** -->
    

    
    <div id="header" class="elemeInit">
        <div id="header_in">
        	<div id="logo"> <h1><a href="index.php"><b>Portfolio</b> Vyach Sellathurai</a></h1></div>
        	 <div id="menu" class="menuBack">
		         <ul>
		            <li class="cheatBann"><a href="index.php" <?php ifBonnePage("index.php")?>>Accueil</a></li>
		            <li class="cheatBann"><a href="competence.php" <?php ifBonnePage("competence.php")?>>Competences</a></li>
		            <li><a href="projetsDisplay.php" <?php ifBonnePage("projetsDisplay.php"); ifBonnePage("getap.php"); ifBonnePage("weonestore.php"); ifBonnePage("zencours.php"); ifBonnePage("partitionneur.php");?>>Projets</a></li>
		            <li><a href="#" <?php ifBonnePage("#")?>>Veille Technologique</a></li>
		            <li><a href="cv.php" <?php ifBonnePage("cv.php")?>>CV</a></li>
		            <li><a href="contact.php" <?php ifBonnePage("contact.php")?>>Contact</a></li>            
		         </ul>
	        </div>
	    </div>
    </div>

<script>
	$(function(){
		$('#menu').slicknav();
	});
</script>
<?php include("fonctionsPHP/fonctionEspace.php");
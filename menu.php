<?php include('fonctionsPHP/fonctionIfBonnePage.php')?>
<!-- *********  Header  ********** -->
    
    <div id="header">
        <div id="header_in">
        
        	<h1><a href="index.php"><b>Portfolio</b> Vyach Sellathurai</a></h1>
        
	        <div id="menu">
		         <ul>
		            <li><a href="index.php" <?php ifBonnePage("index.php")?>>Accueil</a></li>
		            <li><a href="competence.php" <?php ifBonnePage("competence.php")?>>Competences</a></li>
		            <li><a href="projetsDisplay.php" <?php ifBonnePage("projetsDisplay.php"); ifBonnePage("getap.php"); ifBonnePage("weonestore.php"); ifBonnePage("zencours.php");?>>Projets</a></li>
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
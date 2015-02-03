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
<script>

	/*$(window).scroll(function() {
		if(!$('#menu').hasClass("menuFixed") && ($(window).scrollTop() > $('#menu').offset().top)) {
			$('#menu').removeClass("menuBack");
			$('#menu').addClass("menuFixed").data("top", $('#menu').offset().top);

		} 
		else if ($('#menu').hasClass("menuFixed") && ($(window).scrollTop() < $('#menu').data("top"))) {
			$('#menu').removeClass("menuFixed");
			$('#menu').addClass("menuBack")
		}
	});*/

	$(window).scroll(function() {
		if(!$('#header').hasClass("elemFixed") && ($(window).scrollTop() > $('#header').offset().top)) {
			$('#header').removeClass("elemeInit");
			$('#header').addClass("elemFixed").data("top", $('#header').offset().top);
			$('#menu').removeClass("menuBack");
			$('#menu').addClass("menuFixed").data("top", $('#menu').offset().top);
			
		} 
		else if ($('#header').hasClass("elemFixed") && ($(window).scrollTop() < $('#header').data("top"))) {
			$('#header').removeClass("elemFixed");
			$('#header').addClass("elemeInit")
			$('#menu').removeClass("menuFixed");
			$('#menu').addClass("menuBack")
		}
	});
</script>


<?php include("fonctionsPHP/fonctionEspace.php");
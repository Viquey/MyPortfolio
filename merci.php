<!DOCTYPE html>

<html>
<head>
    <?php include('head.php');?>

</head>

<body>

    <!-- *********  Main part – headline ********** -->
    
        
        <div id="main_part_merci">
            <div id="main_part_merci_in">
            		
        	 </div>
        	 <p><a href="index.php">Portfolio de Vyach Sellathurai</a></p>
            
        </div>
        
        
        <!-- *********  Content  ********** -->
        
        <div id="content_inner_merci">
            
			<h5>Je vous remercie de m'avoir envoyer un message.</h5>
			<a href="index.php" class="button_merci">Accueil</a>
            <div class="cara"></div>
            
            

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

<?php 

function espace($nombreEspace) {

	$espaceTotal = str_repeat("&nbsp;",$nombreEspace)  ;

	echo $espaceTotal ;

}

?>

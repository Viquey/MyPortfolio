<!DOCTYPE html>

<html>
<head>
    <?php include('head.php');?>

</head>

<body>
    
    <?php include('menu.php');?>
    <?php include('fonctionsPHP/projetView.php');?>
    
    <!-- *********  Main part â€“ headline ********** -->
    
        
        <div id="main_part_inner">
            <div id="main_part_inner_in">
        
            <h2>Mes projets</h2>
            </div>
            
        </div>
        
        
        <!-- *********  Content  ********** -->
        
        <div id="content_inner">
			<br/>
            <!-- **** Items **** -->
            
            
            <?php 
            
            	projetView("GETAP", "Mai-Juin 2014", "getap.php", "img/projets/getap/getapDisplay.png", "item1");
            	projetView("WEONESTORE", "novemdre 2013 - 2014", "zencours.php", "img/portfolio2.jpg", "item2");
            	projetView("Partitionneur", "octobre 2014", "partitionneur.php", "#", "item3");
            	projetView("Dunord", "Novembre 2014", "#", "#", "item4")
            ?>

            <hr class="cleanit">
            
            <!-- ** Pagination ** -->
            
            <!--<ul class="pagination">
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#" class="active">3</a></li>
                <li><a href="#">4</a></li>            
            </ul>
            -->
            <div class="cara"></div>
            
            
            <p class="textit">	Voici tous les projets dans lesquels j'ai pu participer au cours de ma formation et en dehors de ma formation.<br/>
            					Vous trouverez sur chaques pages des projets un résumé du projet(à quoi va servir le projet) ainsi que mes divers interventions sur le projets (études, programmation, etc ...).</p>
        
            
            
        </div>
        
    
    
    <!-- *********  Footer  ********** -->
    
    <?php include('footer.php');?>


</body>
</html>

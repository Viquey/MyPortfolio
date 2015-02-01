<?php

/**
 * 
 * @param projectName string
 * 
 * @param stringDate string
 * 
 * @param path string
 * 
 * @param imgSrcFile string
 * 
 * @param alt string
 * 
 * @return affiche le code html de l'aperçu d'un projet
 */
function projetView($projectName, $stringDate, $path, $imgSrcFile, $alt) {
	echo ("

					<div class=\"fourths_portfolio\">
                		<h4>".$projectName."<br/>
		                <span>voir le projet <br/>
		                		".$stringDate."</span>
		                </h4>
		                <a href=\"".$path."\"><img src=\"".$imgSrcFile."\" alt=\"".$alt."\"></a>
            		</div>
				");

}
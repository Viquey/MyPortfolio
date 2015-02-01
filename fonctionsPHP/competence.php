<?php

function tableauCompetence($arraySkills) {
	$nbCompetence = count($arraySkills);
	for($i = 0; $i < $nbCompetence; $i++){
		echo ("
							<tr>
	           					<td>".$arraySkills[$i][0] ." </td>
	           					<td>".$arraySkills[$i][1]
		);
		if (count($arraySkills[$i]) == 3) {
			echo(" <a href=\"".$arraySkills[$i][2]."\">d&eacute;tails");
		}
		echo ("</td>
									</tr>");

	}
		
}
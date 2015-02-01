<?php 
function ifBonnePage($nomPage)
{
	$path = $_SERVER['PHP_SELF'];
  	$file = basename ($path);
  	
	if($file == $nomPage)
	{
	echo "class=\"active\"";
	}
}

?>
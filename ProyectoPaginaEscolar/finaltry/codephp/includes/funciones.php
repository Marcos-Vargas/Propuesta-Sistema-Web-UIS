<?php 
                              /* Esta pagina es a prueba de hackers */
function clean ($str)
{
	$var = strip_tags(addslashes(stripslashes(htmlspecialchars($str))));
	return $var;
}



?>
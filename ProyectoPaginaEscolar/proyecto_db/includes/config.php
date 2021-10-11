<?php 

$host = "localhost" ;
$dbuser = "root";
$dbpwd = "";
$db= "colboyd";
$connect = mysqli_connect ($host ,$dbuser, $dbpwd);
			if (!$connect ){
				echo ("No se ha conectado a la base de datos");
				} else {
					
					$select = mysqli_select_db ( $connect ,$db ) ;

					
					}

?>
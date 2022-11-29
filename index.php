<?php

session_start(); 

	define( 'MYSQL_HOST', 		'localhost' );
	define( 'MYSQL_DATABASE', 	'Unilasalle' );
	define( 'MYSQL_USER',		'root' );

	try {
		$strConnection = 'mysql:host='.MYSQL_HOST.';dbname='.MYSQL_DATABASE; 		
		$pdo = new PDO( $strConnection, MYSQL_USER, MYSQL_PASSWORD );				
		$pdo->query( "SET NAMES 'utf8'" ); 											
		$pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
	} catch( PDOException $e ) {
		die( 'ERREUR PDO : ' . $e->getMessage() . ' => (Verifier les parametres de connexion)' );
	}
	
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Page Web - TP DevOps</title>
	</head>
    <body>
		<p>Ceci est notre page web !</p>
    </body>
</html>
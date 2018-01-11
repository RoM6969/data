<?php


try
{
    $bdd = new PDO('mysql:host=;dbname=guerreti;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
	
}



//$reponce = mysql_query("SELECT * FORM bdppllution10");
?>
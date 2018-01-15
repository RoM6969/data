<?php


try
{
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=guerreti;charset=utf8', 'root','123');
	
	echo "toto";
	//on recupere tout le contenut de la table bdpollution2_5
	
	$reponse_2_5 = $bdd->query("SELECT * FROM `bdpollution2_5` WHERE `id` = 11 ");
	
	
	$donnees = $reponse->fetch();
	
	
	
	//on recupere tout le contenut de la table bdpollution10
	
	$reponse = $bdd->query("SELECT * FROM `bdpollution2_5` WHERE `id_10` = 11 ");
	
	
	$donnees = $reponse->fetch();
	
	
	
	//on recupere tout le contenut de la table bdpollution2_5
	
	$reponse = $bdd->query("SELECT * FROM `bdpollution2_5` WHERE `id` = 11 ");
	
	
	$donnees = $reponse->fetch();
	
	
	
	//on recupere tout le contenut de la table bdpollution2_5
	
	$reponse = $bdd->query("SELECT * FROM `bdpollution2_5` WHERE `id` = 11 ");
	
	
	$donnees = $reponse->fetch();
	
	
	
	//on recupere tout le contenut de la table bdpollution2_5
	
	$reponse = $bdd->query("SELECT * FROM `bdpollution2_5` WHERE `id` = 11 ");
	
	
	$donnees = $reponse->fetch();
	
	
	
	//on recupere tout le contenut de la table bdpollution2_5
	
	$reponse = $bdd->query("SELECT * FROM `bdpollution2_5` WHERE `id` = 11 ");
	
	
	$donnees = $reponse->fetch();
	
	
	//on recupere tout le contenut de la table bdpollution2_5
	
	$reponse = $bdd->query("SELECT * FROM `bdpollution2_5` WHERE `id` = 11 ");
	
	
	$donnees = $reponse->fetch();

	
	
	
	$resul_valeur_particule10 = $valeur_particule10->fetch();
	

}
catch(Exception $e) {
    echo $e->getMessage();
}
?>
<?php echo $donnees['2002']; ?> euros !<br />


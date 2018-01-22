<?php

 $bdd = new PDO('mysql:host=127.0.0.1;dbname=api_pollution;charset=utf8', 'root','123');

//bd pollution2.5

 $polution25 = $bdd->query("SELECT * FROM `bdpollution2_5` WHERE `id` = 11 ");

//on recupere tout le contenut de la table bdpollution10
    
$polution10 = $bdd->query("SELECT * FROM `bdpollution10` WHERE `id_10` = 11 ");
//on recupere tout le contenut de la table consultation_cardio`
    
$cardio = $bdd->query("SELECT * FROM `consultation_cardio` WHERE `pays` LIKE '%001 France entière%' ");
    

//on recupere tout le contenut de la table consultation_pneumo`
    
$pneumo = $bdd->query("SELECT * FROM `consultation_pneumo` WHERE `pays` LIKE '%001 France entière%' ");


//on recupere tout le contenut de la table consultation_total`
    
$total = $bdd->query("SELECT * FROM `consultation_totale` WHERE `pays` LIKE '%001 France entière%' ");
$res_total = $total->fetch();











$sql = $bdd->query("SELECT * FROM 'annee'");


tant que y'a une année

{

$variableid =recupérer id (1)
$varable _anne recupérer année (2001)


$pollution2_5 = select $annee frmo bdpollution2_5 where geotime like 'france';



$pollution10 = select $annee frmo bdpollution10 where geotime like 'france';



select $annee frmo consultation_cardio 
SELECT `2003` FROM `consultation_cardio` WHERE 1


insert into resultat id_annee, id_pollution2_5.... values ($id, $annee, $...)
}








































?>
<?php  		//connexion a la base 
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=api_pollution;charset=utf8', 'root','123');





//afficher les donner compris entre 2001 et 2014
for ($i=2001; $i<2014; $i++) 
{


	/*  //on recupere tout le contenut de la table annee`
    
    $total = $bdd->query("SELECT * FROM `consultation_total` WHERE `pays` LIKE '%fra%' ");
    $total->execute();
    $res_total = $total->fetch();*/

    //on recupere tout le contenut de la table bdpollution2_5
    
    $polution25 = $bdd->query("SELECT * FROM `bdpollution2_5` WHERE `id` = 11 ");
    $polution25->execute();
    $res_taux25 = $polution25->fetch();

    //on recupere tout le contenut de la table bdpollution10

    $polution10 = $bdd->query("SELECT * FROM `bdpollution10` WHERE `id` = 11 ");
    $polution10->execute();
    $res_taux10 = $polution10->fetch();


    //on recupere tout le contenut de la table consultation_cardio`
    
    $cardio = $bdd->query("SELECT * FROM `consultation_cardio` WHERE `pays` LIKE '%001 France entière%' ");
    $cardio->execute();
    $res_cardio = $cardio->fetch();

    //on recupere tout le contenut de la table consultation_pneumo`
    
    $pneumo = $bdd->query("SELECT * FROM `consultation_pneumo` WHERE `pays` LIKE '%001 France entière%' ");
    $pneumo->execute();
    $res_pneumo = $pneumo->fetch();

    //on recupere tout le contenut de la table consultation_total`
    
    $total = $bdd->query("SELECT * FROM `consultation_total` WHERE `pays` LIKE '%fra%' ");
    $total->execute();
    $res_total = $total->fetch();


//affiche la valeur de chaque requette de 2001 a 2014
    echo $id_annee =$i;
    echo $res_taux25[$i];
    echo $res_taux10[$i];
    echo $res_cardio[$i];
    echo $res_pneumo[$i];
    echo $res_total[$i];
    $id=1;




//


//insert into resultat id_annee, id_pollution2_5.... values ($id, $annee, $...)

$vartest=$bdd->query("INSERT INTO resultat (id,id_annee,id_pollution2_5,id_pollution10,id_pneumo,id_cardio,id_total) VALUES ($id,$id_annee[$i],$res_taux25[$i],$res_taux10[$i],$res_pneumo[$i],$res_cardio[$i],$res_total[$i])");
$vartest->execute();

var_dump($vartest);

 ?>

 <br>  

<?php
}
    
?>
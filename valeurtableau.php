
<?php

try
{
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=guerreti;charset=utf8', 'root','123');
    
    
    
    
    
    //on recupere tout le contenut de la table bdpollution2_5
    
    $polution25 = $bdd->query("SELECT * FROM `bdpollution2_5` WHERE `id` = 11 ");
    
    
    $res_taux25 = $polution25->fetch();
    
    //on recupere tout le contenut de la table bdpollution10
    
    $polution10 = $bdd->query("SELECT * FROM `bdpollution10` WHERE `id_10` = 11 ");
    
    
    $res_taux10 = $polution10->fetch();
    
    
    //on recupere tout le contenut de la table consultation_cardio`
    
    $cardio = $bdd->query("SELECT * FROM `consultation_cardio` WHERE `pays` LIKE '%001 France entière%' ");
    $res_cardio = $cardio->fetch();

    //on recupere tout le contenut de la table consultation_pneumo`
    
    $pneumo = $bdd->query("SELECT * FROM `consultation_pneumo` WHERE `pays` LIKE '%001 France entière%' ");
    $res_pneumo = $pneumo->fetch();

    //on recupere tout le contenut de la table consultation_total`
    
    $total = $bdd->query("SELECT * FROM `consultation_totale` WHERE `pays` LIKE '%001 France entière%' ");
    $res_total = $total->fetch();


}
catch(Exception $e) {
    echo $e->getMessage();
}





?>

<td><?php echo $res_cardio['2002']; ?></td>
                        <td><?php echo $res_pneumo['2002']; ?></td>
                        <td><?php echo $res_total['2002']; ?></td>
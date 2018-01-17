<?php  
 //load_product.php  


   //on recupere tout le contenut de la table consultation_total`
  

 if(isset($_POST["price"]))  
 {  

  //recupere anner
     $valeur_anner= $_POST["price"]; 

//connexion a la base 
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




//condition si radio 10 est valider

//condition si mp10 est inferieur a 20 vert 07FF3D
	if ($res_taux10 > 20) {
	
		echo "<img src='img/francevert.svg'>";

	}
	//condition si mp10 est superieur a 20 et inferieur a 30 orange FFD800
	if ($res_taux10 < 20 & $res_taux10 > 30) {
		echo "<img src='img/francejaune.svg'>";
	}
	//condition si mp10 est superieur a 30 et inferieur 50 rouge FF1418
	if ($res_taux10 < 30 & $res_taux10 > 50) {
		echo "<img src='img/francerouge.svg'>";
	}
	//condition si mp10 est superieur 50 et inferieur 70 gris  C0C0C0
	if ($res_taux10 < 50 & $res_taux10 > 70) {
		echo "<img src='img/francegris.svg'>";
	}
	//condition si mp10 est superieur 70 noire   000000
	if ($res_taux10 < 70 ) {
		echo "<img src='img/francenoire.svg'>";
	}

?>







<br><br>





 <table>
                    <tr>
                        <td style="tdborderless"> <input type="radio" name="radio" value="Particule"></td>
                        <td>particules de moins de 2.5ùm</td>
                        <td>particules de + de 10ùm</td>
                    </tr>


                    <tr>
                        <td>Taux maximal de l'OMS</td>
                        <td>10</td>
                        <td>20</td>
                    </tr>

                    <tr>
                        <td>Taux reel relevé</td>
                         
                
        

                        <td><?php echo $res_taux25[$valeur_anner]; ?></td>
                        <td><?php echo $res_taux10[$valeur_anner]; ?></td>
                    </tr>
                </table>
                <br>
                <br>

                <table>
                    <tr>
                        <td style="tdborderless"> <input type="radio" name="radio" value="Pneumologie"></td>
                        <td>Pneumologie</td>
                        <td>Cardiologie</td>
                        <td>Total</td>

                    </tr>


                    <tr>
                        <td>consultaions</td>

                        <td><?php echo $res_cardio[$valeur_anner]; ?></td>
                        <td><?php echo $res_pneumo[$valeur_anner]; ?></td>
                        <td><?php echo $res_total[$valeur_anner]; ?></td>
                    </tr>
                </table>


<?php

 } 

?>

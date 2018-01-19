<?php  
 //load_product.php  


   //on recupere tout le contenut de la table consultation_total`


 if(isset($_POST["annee1"]))  
 {  

  //recupere anner
     $valeur_anner= $_POST["annee1"]; 




//connexion a la base 
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=guerreti;charset=utf8', 'root','123');
    
    
    
    
    
    //on recupere tout le contenut de la table bdpollution2_5
    
    $polution25 = $bdd->query("SELECT * FROM `bdpollution2_5` WHERE `id` = 11 ");
    
    
    $res_taux25 = $polution25->fetch();

    $veriftaux25=$res_taux25[$valeur_anner];
    
    //on recupere tout le contenut de la table bdpollution10
    
    $polution10 = $bdd->query("SELECT * FROM `bdpollution10` WHERE `id_10` = 11 ");
    
    
    $res_taux10 = $polution10->fetch();

    $veriftaux10=$res_taux10[$valeur_anner];
    
    
    //on recupere tout le contenut de la table consultation_cardio`
    
    $cardio = $bdd->query("SELECT * FROM `consultation_cardio` WHERE `pays` LIKE '%001 France entière%' ");
    $res_cardio = $cardio->fetch();

    //on recupere tout le contenut de la table consultation_pneumo`
    
    $pneumo = $bdd->query("SELECT * FROM `consultation_pneumo` WHERE `pays` LIKE '%001 France entière%' ");
    $res_pneumo = $pneumo->fetch();

    //on recupere tout le contenut de la table consultation_total`
    
    $total = $bdd->query("SELECT * FROM `consultation_totale` WHERE `pays` LIKE '%001 France entière%' ");
    $res_total = $total->fetch();



echo var_dump($veriftaux10 + " particule 10");
echo var_dump($veriftaux25 + " particule 25");



//test resultat des bouton radio
$test25 = 1  ;
$test10 = 1 ;



//condition si radio 10 est valider
if ($test25=0) {
	# code...



	//condition si mp10 est inferieur a 20 vert 07FF3D
	if ($veriftaux10 < 20) {
	
		echo "<img src='img/francevert.svg'>";

	}
	//condition si mp10 est superieur a 20 et inferieur a 30 orange FFD800
	else if ($veriftaux10 > 20 && $veriftaux10 < 30) {
		echo "<img src='img/francejaune.svg'>";
	}
	//condition si mp10 est superieur a 30 et inferieur 50 rouge FF1418
	else if ($veriftaux10 > 30 && $veriftaux10 < 50) {
		echo "<img src='img/francerouge.svg'>";
	}
	//condition si mp10 est superieur 50 et inferieur 70 gris  C0C0C0
	else if ($veriftaux10 > 50 && $veriftaux10 < 70) {
		echo "<img src='img/francegris.svg'>";
	}
	//condition si mp10 est superieur 70 noire   000000
	else if ($veriftaux10 > 70 ) {
		echo "<img src='img/francenoire.svg'>";
	}


}
//radio est pas 
else  if ($test25=1) {
	

	//condition si mp2.5 est inferieur a 10 vert 07FF3D
	if ($veriftaux25 < 10) {
	
		echo "<img src='img/francevert.svg'>";

	}
	//condition si mp2.5 est superieur a 10 et inferieur a 15 orange FFD800
	else if ($veriftaux25 >= 10 && $veriftaux25 < 15) {
		echo "<img src='img/francejaune.svg'>";
	}
	//condition si mp2.5 est superieur a 15 et inferieur 25 rouge FF1418
	else if ($veriftaux25 >= 15 && $veriftaux25 < 25) {
		echo "<img src='img/francerouge.svg'>";
	}
	//condition si mp2.5 est superieur 25 et inferieur 35 gris  C0C0C0
	else if ($veriftaux25 >= 25 && $veriftaux25 < 35) {
		echo "<img src='img/francegris.svg'>";
	}
	//condition si mp2.5 est superieur 35 noire   000000
	else if ($veriftaux25 >= 35 ) {
		echo "<img src='img/francenoire.svg'>";
	}

}

?>







<br><br>





 <table>
                    <tr>
                        <td style="tdborderless"> </td>
                     <form  method="POST" >
                            <td><input type="radio" name="radiopollution" value="particule25">particules de moins de 2.5ùm</td>
                            <td><input type="radio" name="radiopollution" value="particule10">particules de + de 10ùm</td>
                        </form>



                     



                    


                     
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

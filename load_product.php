<?php  
 //load_product.php  


   //on recupere tout le contenut de la table consultation_total`
  

 if(isset($_POST["price"]))  
 {  

  //recupere anner
     $valeur_anner= $_POST["price"]; 

//connexion a la base 
  
$connect = new PDO('mysql:host=127.0.0.1;dbname=guerreti;charset=utf8', 'root','123');





//test valeur anner
/* echo $valeur_anner  ;*/

//requette pour avoir taux pollution 2.5
$polution25 = $connect->query("SELECT * FROM `bdpollution2_5` WHERE `id` = 11 ");
  
  
  $result = $polution25->fetch();

//afficher resultat de la requette 
 echo $result[$valeur_anner];






 } ?>



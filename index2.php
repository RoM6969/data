 <?php   

 //connexion a la base de donner

   /*  $result = new PDO('mysql:host=127.0.0.1;dbname=guerreti;charset=utf8', 'root','123');


     $result=*/

 ?> 



<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    
    <title>Api Polution</title>
    
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">


    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

<!-- lien test  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  


</head>





<body>



    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- -------------------------------------------------------------
        début parti modifiable 
    -->
    
    
    
<!-- connexion---->
<?php


try
{
    $result = new PDO('mysql:host=127.0.0.1;dbname=guerreti;charset=utf8', 'root','123');
    
    
    
    
    
    //on recupere tout le contenut de la table bdpollution2_5
    
    $polution25 = $result->query("SELECT * FROM `bdpollution2_5` WHERE `id` = 11 ");
    
    
    $res_taux25 = $polution25->fetch();
    
    //on recupere tout le contenut de la table bdpollution10
    
    $polution10 = $result->query("SELECT * FROM `bdpollution10` WHERE `id_10` = 11 ");
    
    
    $res_taux10 = $polution10->fetch();
    
    
    //on recupere tout le contenut de la table consultation_cardio`
    
    $cardio = $result->query("SELECT * FROM `consultation_cardio` WHERE `pays` LIKE '%001 France entière%' ");
    $res_cardio = $cardio->fetch();

    //on recupere tout le contenut de la table consultation_pneumo`
    
    $pneumo = $result->query("SELECT * FROM `consultation_pneumo` WHERE `pays` LIKE '%001 France entière%' ");
    $res_pneumo = $pneumo->fetch();

    //on recupere tout le contenut de la table consultation_total`
    
    $total = $result->query("SELECT * FROM `consultation_totale` WHERE `pays` LIKE '%001 France entière%' ");
    $res_total = $total->fetch();


}
catch(Exception $e) {
    echo $e->getMessage();
}
?>




    
    
    <div class="container">
        <div class="row">  <!-- afficher carte -->
            <div class="col-sm-4 py-5"> 
                <?php include('fonction_slider.php');?>   

            </div>
            <div class="col-sm-2 py-5"></div>


         <!--    <div class="col-sm-6s py-5">
         
         <div class="col-sm-4 py-5"> -->
<input type="range" min="2001" max="2013" step="1" value="2001" id="min_price" name="min_price" />  
                     <span id="price_range"></span>  


 <div id="product_loading">  
            
                
                <div>Année 2001</div>
                <br>


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
                       
                        <td><?php 
                        //valeur par defaut 2001

                        echo $res_taux25['2001']; ?></td>
                        <td><?php echo $res_taux10['2001']; ?></td>
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

                    <tr>
                        <td>consultaions</td>

                        <td><?php echo $res_cardio['2001']; ?></td>
                        <td><?php echo $res_pneumo['2001']; ?></td>
                        <td><?php echo $res_total['2001']; ?></td>
                    </tr>
                </table>

            
    
                          
                       
                     
                 </div>
          
                </div>  

        </div>
    



<!--  //////////recup l'anner et regener la page toute les 500ms ////////////// -->
 <script>  
 $(document).ready(function(){  
      $('#min_price').change(function(){  
           var price = $(this).val();  
           $("#price_range").text("Année " + price);  
           $.ajax({  
                url:"fonction_slider.php",  
                method:"POST",  
                data:{price:price},  
                success:function(data){  
                     $("#product_loading").fadeIn(500).html(data);  
                }  
           });  
      });  
 });  
 </script>  

    <!-- -------------------------------------------------------------
        Fin parti modifiable 
    -->

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b, o, i, l, e, r) {
            b.GoogleAnalyticsObject = l;
            b[l] || (b[l] =
                function() {
                    (b[l].q = b[l].q || []).push(arguments)
                });
            b[l].l = +new Date;
            e = o.createElement(i);
            r = o.getElementsByTagName(i)[0];
            e.src = '//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e, r)
        }(window, document, 'script', 'ga'));
        ga('create', 'UA-XXXXX-X', 'auto');
        ga('send', 'pageview');
    </script>
    
    
    
    
</body>

</html>




<!--          -->




<!--          -->

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
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- -------------------------------------------------------------
        début parti modifiable 
    -->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 py-5"> <img src="img/carte.png">

                <label for="fader">Année</label>
                <input type="range" min="2001" max="2013" value="2001" id="fader" step="1" oninput="outputUpdate(value)">
                <output for="fader" id="Année">2001</output>

            </div>
            <div class="col-sm-2 py-5"></div>


            <div class="col-sm-6s py-5">

            <div class="col-sm-4 py-5">

                <table>
                    <tr>
                        <td style="tdborderless"> <input type="radio" name="radio" value="Particule"></td>
                        <td>particules de moins de 2.5ùm</td>
                        <td>particules de + de 10ùm</td>
                    </tr>


                    <tr>
                        <td>Taux maximal de l'OMS</td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Taux reel relevé</td>
                        <td></td>
                        <td></td>
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
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>

            </div>


        </div>
    </div>
    </div>

    <!-- -------------------------------------------------------------
        Fin parti modifiable 
    -->
    <script type="text/javascript">
        function outputUpdate(vol) {
            document.querySelector('#Année').value = vol;
        }

    </script>
    <script>
        var slider = document.getElementById("myRange");
        var output = document.getElementById("demo");
        output.innerHTML = slider.value; // Display the default slider value
        // Update the current slider value (each time you drag the slider handle)
        slider.oninput = function() {
            output.innerHTML = this.value;
        }

    </script>
    <script type="text/javascript">
        function outputUpdate(vol) {
            document.querySelector('#Année').value = vol;
        }

    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
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

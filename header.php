<?php
global $narbar_bandera;
$url_base = "";
$url_base_final = "http://" . $_SERVER['HTTP_HOST'] . "/" . $url_base;
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <meta name="description" content="Sitio Personal de Rogelio Vargas">
        <meta name="author" content="Rogelio Vargas">

        <link href="css/theme.css" rel="stylesheet" />
        <link href="css/extras.css" rel="stylesheet" />

        <link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <title>Rogelio Vargas Marquez | Full Stack Developer</title>

        <link rel="shortcut icon" type="image/png" href="favicon.png" />
        <script>
            var url_general_sitio = '<?php echo $url_base_final; ?>';
        </script>

        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-76301055-1', 'auto');
            ga('send', 'pageview');

        </script>
    </head>
    <?php //include_once 'pages/demo.php'; ?>


    <body>


        <div class="navbar navbar-default navbar-fixed-top top-nav-collapse">
            <div class="container">
                <div class="navbar-header">
                    <a href="<?php echo $url_base_final; ?>" class="navbar-brand">Rogelio Vargas </a>
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="navbar-main">
                    <ul class="nav navbar-nav">

                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo $url_base_final; ?>" >Inicio</a></li>
                        <li><a href="page-servicios.php" >Servicios</a></li>
                        <li><a href="page-portafolio.php" >Portafolio</a></li>
                        <li><a href="page-blog.php" >Blog</a></li>
                        <li><a href="page-contacto.php" >Contacto</a></li>
                    </ul>

                </div>
            </div>
        </div>

        <?php
        if ($GLOBALS['narbar_bandera'] != 'index.php'):
            ?>
            <div style="height: 50px;"></div>
            <?php
        endif;
        ?>


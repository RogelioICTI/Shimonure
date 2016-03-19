<?php
$url_base = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <link href="css/theme.css" rel="stylesheet" />
        <link href="css/extras.css" rel="stylesheet" />

        <link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
        <title>Rogelio Vargas Marquez | Shimonure</title>
        
        <link rel="shortcut icon" type="image/png" href="favicon.png" />
    </head>
    <?php //include_once 'pages/demo.php'; ?>


    <body>

        <?php include_once 'header.php' ?>
        
        <?php include_once 'pages/home/about_me.php'?>

        <div style="height: 1000px">asda</div>

    </body>


    <!-- jQuery Core JavaScript -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    
    <!-- Animación Extra JavaScript -->
    <script src="js/scroll_extra.js"></script>
    
    
    <script>
        $(document).ready(function () {
            $('[data-toggle="popover"]').popover();
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</html>

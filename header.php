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
        <link href='https://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        
        <title>Rogelio Vargas Marquez | Shimonure</title>
        
        <link rel="shortcut icon" type="image/png" href="favicon.png" />
    </head>
    <?php //include_once 'pages/demo.php'; ?>


    <body>


<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a href="<?php echo $url_base;?>" class="navbar-brand">Shimonure</a>
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
                <li><a href="<?php echo $url_base; ?>" >Inicio</a></li>
                <li><a href="#" >Servicios</a></li>
                <li><a href="#" >Portafolio</a></li>
                <li><a href="#" >Contacto</a></li>
            </ul>

        </div>
    </div>
</div>

<?php include_once 'pages/home/banner.php'?>

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
    </head>
    <?php include_once 'pages/demo.php'; ?>
    
    <!-- jQuery Core JavaScript -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $('[data-toggle="popover"]').popover();
            $('[data-toggle="tooltip"]').tooltip();

        });
        /*
         $(document).scroll(function (e) {
         var scrollTop = $(document).scrollTop();
         if (scrollTop > 50) {
         console.log(scrollTop);
         $('.navbar').removeClass('navbar-static-top').addClass('navbar-fixed-top');
         } else {
         $('.navbar').removeClass('navbar-fixed-top').addClass('navbar-static-top');
         }
         });
         */
    </script>
</html>

<?php include_once 'header.php' ?>
<div class="body-contenido">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h1>ByeBye Bichitos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 padding-bottomtop-10">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div  class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="img_pruebas/descarga.jpg" alt="Chania">
                        </div>

                        <div class="item">
                            <img src="img_pruebas/descarga.jpg" alt="Chania">
                        </div>

                        <div class="item">
                            <img src="img_pruebas/descarga.jpg" alt="Flower">
                        </div>

                        <div class="item">
                            <img src="img_pruebas/descarga.jpg" alt="Flower">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-4 padding-bottomtop-10">
                <div class="trabajo-item-home padding-leftright-10">
                    <h3>Detalles</h3>
                    <ul>
                        <li>
                            <span class="item-single-descripcion">Liga al sitio:</span> <a href="http://byebyebichitos.com/" target="_blank">www.byebyebichitos.com</a> 
                        </li>
                        <li>
                            <span class="item-single-descripcion">Descripción: </span>
                            Elaboré el sitio Web para una serie de Clínicas Especializadas en el tratamiento de la Pediculosis. 
                            Además, se integraron pequeños scripts en jQuery para brindar una mejor experiencia a los visitantes del sitio. 
                            Para el maquetado se uso con HTML y Bootstrap, se personalizaron todos los elementos de Bootstrap usando CSS
                            Apoye en la redacción y selección de contenido.
                        </li>
                        <li>
                            <span class="item-single-descripcion">
                                Herramientas:
                            </span>
                        </li>
                    </ul>



                    <div class="col-xs-12 text-center">
                        <img class="item-minibarra" data-toggle="tooltip" title="CSS" src="img/lenguajes/css.png">
                        <img class="item-minibarra" data-toggle="tooltip" title="HTML" src="img/lenguajes/html.png">
                        <img class="item-minibarra" data-toggle="tooltip" title="PHP" src="img/lenguajes/php.png">
                        <img class="item-minibarra" data-toggle="tooltip" title="BOOTSTRAP" src="img/lenguajes/bootstrap.png">
                        <img class="item-minibarra" data-toggle="tooltip" title="JQUERY" src="img/lenguajes/jquery.png">
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 text-center">
                <a class="btn btn-primary fs-18 btn-arrow" href="index.php"><i class="fa fa-home"></i> Inicio</a>
            </div>
        </div>
    </div>
</div>
<?php include_once 'footer.php' ?>
</body>

<div class="footer">
    <div class="container">
        <div class="col-md-4">
            <ul class="lista-footer">
                <li><a href="page-servicios.php" >Servicios</a></li>
                <li><a href="page-portafolio.php" >Portafolio</a></li>
                <li><a href="page-blog.php" >Blog</a></li>
                <li><a href="page-contacto.php" >Contacto</a></li>
            </ul>
        </div>
        <div class="col-md-4 text-center">
            Copyright © 2016 <br class="hidden-sm hidden-xs"/> Rogelio Vargas Marquez
        </div>
        <div class="col-md-4">
            <ul class="lista-footer-2">
                
                <li>
                    <a href="https://www.linkedin.com/in/rogelio-vargas-2657478b?trk=hp-identity-name">
                        linkedin &nbsp;<i style="" class="fa fa-linkedin-square"></i> 
                    </a>
                </li>
                <li>
                    <a href="skype:shimonureyue?chat">
                        shimonureyue &nbsp;<i style="" class="fa fa-skype"></i>
                    </a>
                </li>
                <li>
                    <a href="page-cv.php">
                        currículum &nbsp;<i style="" class="fa fa-file-text"></i>
                    </a>
                </li>
                <li>
                    <a href="mailto:rogelio.vargas.marquez@gmail.com">
                        rogelio.vargas.marquez@gmail.com  &nbsp;<i style="" class="fa fa-envelope"></i>
                    </a>
                </li>
                

            </ul>
        </div>

    </div>
</div>


<!-- jQuery Core JavaScript -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="js/jquery.easing.min.js"></script>

<!-- Animación Extra JavaScript -->
<?php
if ($GLOBALS['narbar_bandera'] == 'index.php'):
    //echo $GLOBALS['url_base'];
    ?>
    <script src="js/scroll_extra.js"></script>
<?php endif; ?>




<script>
    $(document).ready(function () {
        $('[data-toggle="popover"]').popover();
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
</html>




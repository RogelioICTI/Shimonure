</body>

<div class="footer">
    <div class="container">
        <br/>
        TEXTO
        <br/>
        TEXTO
        <br/>
        TEXTO
        
    </div>
</div>


<!-- jQuery Core JavaScript -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="js/jquery.easing.min.js"></script>

<!-- Animación Extra JavaScript -->
<?php if($GLOBALS['narbar_bandera'] == 'index.php'): echo $GLOBALS['url_base'];?>
<script src="js/scroll_extra.js"></script>



<?php endif;?>




<script>
    $(document).ready(function () {
        $('[data-toggle="popover"]').popover();
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
</html>
    



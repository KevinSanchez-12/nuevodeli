<!DOCTYPE html>
<?php include_once './templates/meta.php'?>
<html lang="es">
<body>
    <?php include_once './templates/menu.php'?>
    <h1 class="title title-secondary">deja tu testimonio</h1>
    <?php include_once './templates/comentario.php'?>
    <?php include_once './templates/footer.php'?>
    <script src="assets/js/simplyCountdown.min.js"></script>
    <script src="assets/js/countdown.js"></script>
</body>
<script type="text/javascript">
    function validarExt(){
        var archivoInput = document.getElementById('file');
        var archivoRuta = archivoInput.value;
        var extPermitidas = /(.)$/i;
        if(!extPermitidas.exec(archivoRuta)){
            alertify.error('Hubo un error al momento de subir su foto.');
            archivoInput.value = '';
            return false;
        }
        else
        {
            if (archivoInput.files && archivoInput.files[0]) 
            {
                var visor = new FileReader();
                alertify.success('Su foto se subió correctamente.');
                visor.onload = function(e) 
                { 
                };
                visor.readAsDataURL(archivoInput.files[0]);
            }
        }
    }
</script>
</html>
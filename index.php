<?php
    include 'global/config.php';
    include 'global/conexion.php';
    include 'carrito.php';
?>
<!DOCTYPE html>
<?php include_once './templates/meta.php'?>
<head>
<link rel="stylesheet" href="assets/css/banner.css">
<script src="assets/js/jquery.min.js"></script>
</head>
<html lang="es">
<body>
    <?php include_once './templates/menu.php'?>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide a">
                <div>
                    <h1>Cervezas</h1>
                </div>
            </div>
            <div class="swiper-slide b">
                <div>
                    <h1>Vinos</h1>
                </div>
            </div>
            <div class="swiper-slide c">
                <div>
                    <h1>Licores</h1>
                </div>
            </div>
            <div class="swiper-slide d">
                <div>
                    <h1>Abarrotes</h1>
                </div>
            </div>
        </div>
    </div>
    <h1 class="title title-index">horario de atención</h1>
    <div class="atencion">
        <img src="assets/img/Atencion.gif">
    </div>
    <h1 class="title">nuestros productos</h1>
    <?php
        $sentencia= $pdo->prepare("SELECT * FROM `tblproductos`");
        $sentencia->execute();
        $listaProductos= $sentencia->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <section class="productos">
    <?php foreach($listaProductos as $producto) { ?>
        <div class="item">
            <img src="<?php echo $producto['Imagen']?>" alt="<?php echo $producto['Nombre']?>">
            <div class="btn">
                <form action="" method="post">
                    <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY);?>">
                    <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY);?>">
                    <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY);?>">
                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY);?>">
                    <button class="icon-basket" name="btnAccion" value="Agregar" type="submit">Agregar al carrito</button>
                </form>
            </div>
            <div class="info">
                <h3><?php echo $producto['Nombre']?></h3>
                <h1>S/ <span><?php echo $producto['Precio']?></span></h1>
            </div>
        </div>
    <?php } ?>        
    </section>
    <h1 class="title">nuestros clientes opinan</h1>
    <?php
        $sentenciab= $pdo->prepare("SELECT * FROM `testimonios`");
        $sentenciab->execute();
        $listaComentarios= $sentenciab->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <section class="testimonios">
    <?php foreach($listaComentarios as $comentario) { ?>
        <div class="item">
            <img src="<?php echo $comentario['foto']?>" alt="Foto de Usuario de Nuevo Deli">
            <h2><?php echo $comentario['nombre']?></h2>
            <div class="text">
                <h3>"<span><?php echo $comentario['comentario']?></span> "</h3>
            </div>
        </div>
    <?php } ?>
    </section>
    <h1 class="title">Ubícanos</h1>
    <section class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7878.652587525766!2d-78.52269095767214!3d-9.124972099999981!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zOcKwMDcnMzYuMiJTIDc4wrAzMScwNy4zIlc!5e0!3m2!1ses!2spe!4v1628153488210!5m2!1ses!2spe" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>
    <?php include_once './templates/footer.php'?>
    <script src="assets/js/simplyCountdown.min.js"></script>
    <script src="assets/js/countdown.js"></script>
</body>
<script src="assets/js/banner.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        pagination: {
            el: '.swiper-pagination',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
    });
</script>

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
<?php
    include 'global/config.php';
    include 'global/conexion.php';
    include 'carrito.php';
?>
<!DOCTYPE html>
<?php include_once './templates/meta.php'?>
<html lang="es">
<body>
    <?php include_once './templates/menu.php'?>
    <h1 class="title title-secondary">Abarrotes</h1>
    <?php
        $sentencia= $pdo->prepare("SELECT * FROM `tblproductos` WHERE Categoria like 'Abarrotes'");
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
    <?php include_once './templates/footer.php'?>
    <script src="assets/js/simplyCountdown.min.js"></script>
    <script src="assets/js/countdown.js"></script>
</body>
</html>
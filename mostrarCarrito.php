<?php
    include 'global/config.php';
    include 'carrito.php';
    include 'bd.php';
?>
<!DOCTYPE html>
<?php include_once './templates/meta.php'?>
<html lang="es">
<body>
<?php include_once './templates/menu.php'?>
    <h1 class="title title-secondary">Mi Carrito</h1>
    <div class="container-general">
        <?php if(!empty($_SESSION['CARRITO'])){?>
            <section class="container-table-detalles">
                <div class="table__header">Descripcion</div>
                <div class="table__header">Cantidad</div>
                <div class="table__header">Precio</div>
                <div class="table__header">Total</div>
                <div class="table__header">Acción</div>
                <?php $total=0;?>
                <?php foreach($_SESSION['CARRITO'] as $indice=>$producto){?>
                <div class="table__item"><?php echo $producto['NOMBRE']?></div>
                <div class="table__item"><?php echo $producto['CANTIDAD']?></div>
                <div class="table__item">S/<?php echo $producto['PRECIO']?></div>
                <div class="table__item">S/<?php echo number_format($producto['PRECIO']*$producto['CANTIDAD'],2);?></div>
                <div class="table__item">
                    <form action="" method="post">
                        <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY);?>">
                        <button class="btn btn-danger" type="submit" name="btnAccion" value="Eliminar">Eliminar</button>
                    </form>
                </div>
                <?php $total=$total+($producto['PRECIO']*$producto['CANTIDAD']);?>
                <?php }?>
            </section>
        <?php } else{ ?>
        <div class="alert alert-success">
            No hay productos en el carrito
        </div>
        <?php }?>
        <div class="total">
            <h1>Total:</h1>
            <h3>S/<?php echo number_format($total,2);?></h3>
            <!-- <h3>S/<?php echo number_format(($total+10),2);?></h3> -->
        </div>
        <div class="form-group">
            <form action="pagar.php" method="post">
                <input name="nombres" type="text" id="nombres" placeholder="Ingrese sus nombres" required>
                <input name="dni" maxlength="8" minlength="8" type="text" id="dni" placeholder="Ingrese su DNI" required>
                <button name="btnAccion" type="submit" value="proceder">Reservar compra</button>
            </form>
        </div>
    </div>
    <?php include_once './templates/footer.php'?>
    <script src="assets/js/simplyCountdown.min.js"></script>
    <script src="assets/js/countdown.js"></script>
</body>
</html>
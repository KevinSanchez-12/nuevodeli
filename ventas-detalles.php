<?php
    include 'bd.php';
    $venta = "SELECT * FROM tbldetalleventa";
    $producto= "SELECT * FROM tblproductos";
?>
<!DOCTYPE html>
<?php include_once './templates/meta.php'?>
<html lang="es">
<body>
    <nav class="menu-admin">
        <img src="assets/img/0004.png" alt="Logotipo de NUEVO DELI">
        <h1>Tu delivery de Nuevo Chimbote</h1>
        <a href=""><span class="icon-logout"></span><p>Cerrar Sesión</p></a>
    </nav>
    <div class="btn-link">
        <a href="panel.php">Ir al Inicio</a>
    </div>
    <h1 class="title">Detalle de las Ventas</h1>
    <section class="container-general">
        <section class="container-table container-table-alumnos container-detalle">
            <div class="table__header">Venta</div>
            <div class="table__header">Producto</div>
            <div class="table__header">Precio</div>
            <div class="table__header">Cantidad</div>
            <?php $resultado= mysqli_query($conexion, $venta);
            while($row=mysqli_fetch_assoc($resultado)){ ?>
            <div class="table__item"><?php echo $row["IDVENTA"];?></div>
            <div class="table__item"><?php echo $row["IDPRODUCTO"];?></div>
            <div class="table__item"><?php echo $row["PRECIOUNITARIO"];?></div>
            <div class="table__item"><?php echo $row["CANTIDAD"];?></div>
            <?php }?>
        </section>
    </section>
    <span onclick="abrirb();" class="icon-cancel-1 boton"></span>
    <div id="product" class="products">
        <span onclick="cerrarb();" class="icon-cancel-1"></span>
        <section class="table">
                <div class="a">ID</div>
                <div class="a">Producto</div>
                <?php $resultadob= mysqli_query($conexion, $producto);
                while($row=mysqli_fetch_assoc($resultadob)){ ?>
                <div class="b"><?php echo $row["ID"];?></div>
                <div class="b"><?php echo $row["Nombre"];?></div>
                <?php }?>
        </section>
    </div>
    <div class="contact">
        <p>Para asesoría técnica del sistema, contactarse por:</p>
        <div>
            <a target="_blank" href="https://api.whatsapp.com/send?phone=+51987147390&text=Hola%20Kevin%20S%C3%A1nchez,%20quiero%20asesor%C3%ADa%20t%C3%A9cnica%20para%20el%20sistema%20de%20NUEVODELI." class="icon-wspt"></a>
            <a href="tel:+51987147390" class="icon-phone"></a>
            <a target="_blank" href="mailto:kevinsanmaga12@gmail.com" class="icon-mail-alt"></a>
        </div>
    </div>
</body>
<script src="assets/js/script.js"></script>
</html>
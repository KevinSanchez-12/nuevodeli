<?php
    include 'bd.php';
    $venta = "SELECT * FROM tblventas";
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
    <h1 class="title">Ventas</h1>
    <div class="verificar">
        <a target="_blank" href="https://dni.optimizeperu.com/">Verificar DNI</a>
    </div>
    <section class="container-general">
        <section class="container-table container-table-alumnos">
            <div class="table__header">ID de Venta</div>
            <div class="table__header">Fecha y Hora</div>
            <div class="table__header">DNI</div>
            <div class="table__header">Nombres</div>
            <div class="table__header">Total</div>
            <div class="table__header">Estado</div>
            <div class="table__header">Detalle</div>
            <?php $resultado= mysqli_query($conexion, $venta);
            while($row=mysqli_fetch_assoc($resultado)){ ?>
            <div class="table__item"><?php echo $row["ID"];?></div>
            <div class="table__item"><?php echo $row["Fecha"];?></div>
            <div class="table__item"><?php echo $row["Correo"];?></div>
            <div class="table__item"><?php echo $row["PaypalDatos"];?></div>
            <div class="table__item"><?php echo $row["Total"];?></div>
            <div class="table__item"><?php echo $row["estado"];?></div>
            <div class="table__item operation">
                <a href="ventas-editar.php?id=<?php echo $row["ID"];?>" class="table__item__link" title="Editar">Editar</a>
                <a href="ventas-detalles.php?id=<?php echo $row["ID"];?>" class="table__item__link" title="Ver Detalle">Ver Detalle</a>
            </div>
            <?php }?>
        </section>
    </section>
    <div class="contact">
        <p>Para asesoría técnica del sistema, contactarse por:</p>
        <div>
            <a target="_blank" href="https://api.whatsapp.com/send?phone=+51987147390&text=Hola%20Kevin%20S%C3%A1nchez,%20quiero%20asesor%C3%ADa%20t%C3%A9cnica%20para%20el%20sistema%20de%20NUEVODELI." class="icon-wspt"></a>
            <a href="tel:+51987147390" class="icon-phone"></a>
            <a target="_blank" href="mailto:kevinsanmaga12@gmail.com" class="icon-mail-alt"></a>
        </div>
    </div>
</body>
</html>
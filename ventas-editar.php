<?php
    include 'bd.php';
    $ID = $_GET["id"];
    $venta = "SELECT * FROM tblventas WHERE id='$ID'";
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
    <h1 class="title">Editar estado de la Venta</h1>
    <section class="container-general">
        <form class="container-table container-table--edit container-table-alumnos container-venta" action="ventas-editar-proceso.php"  method="post">
            <div class="table__header">Estado</div>
            <div class="table__header">Operación</div>
            <?php $resultado= mysqli_query($conexion, $venta);
            while($row=mysqli_fetch_assoc($resultado)){ ?>
            <input type="hidden" class="table__input" value="<?php echo $row["ID"];?>" name="id">
            <input type="hidden" class="table__input" value="<?php echo $row["ClaveTransaccion"];?>" name="clave">
            <input type="hidden" class="table__input" value="<?php echo $row["PaypalDatos"];?>" name="datos">
            <input type="hidden" class="table__input" value="<?php echo $row["Fecha"];?>" name="fecha">
            <input type="hidden" class="table__input" value="<?php echo $row["Correo"];?>" name="correo">
            <input type="hidden" class="table__input" value="<?php echo $row["Total"];?>" name="total">
            <select class="select-venta" name="status">
                <option value="pendiente">Pendiente</option>
                <option value="terminado">Terminado</option>
            </select>
            <?php }?>
            <input type="submit" value="Actualizar" class="container__submit submit-venta">
        </form>
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
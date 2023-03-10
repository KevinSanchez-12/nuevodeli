<?php
    include 'bd.php';
    $ID = $_GET["id"];
    $producto = "SELECT * FROM tblproductos WHERE id='$ID'";
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
    <h1 class="title">Editar Producto</h1>
    <section class="container-general">
        <form class="container-table container-table--edit container-table-alumnos" action="panel-editar-proceso.php"  method="post">
            <div class="table__header">Producto</div>
            <div class="table__header">Precio</div>
            <div class="table__header">Descripción</div>
            <div class="table__header">Categoría</div>
            <div class="table__header">Imagen</div>
            <div class="table__header">Operación</div>
            <?php $resultado= mysqli_query($conexion, $producto);
            while($row=mysqli_fetch_assoc($resultado)){ ?>
            <input type="hidden" class="table__input" value="<?php echo $row["ID"];?>" name="id">
            <input type="text" class="table__input" value="<?php echo $row["Nombre"];?>" name="nombre">
            <input type="text" class="table__input" value="<?php echo $row["Precio"];?>" name="precio">
            <input type="text" class="table__input" value="<?php echo $row["Descripcion"];?>" name="descripcion">
            <input type="text" class="table__input" value="<?php echo $row["Categoria"];?>" name="categoria">
            <input type="text" class="table__input" value="<?php echo $row["Imagen"];?>" name="imagen">
            <?php }?>
            <input type="submit" value="Actualizar" class="container__submit">
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
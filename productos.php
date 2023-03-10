<?php
    include 'bd.php';
    $producto = "SELECT * FROM tblproductos";
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
    <h1 class="title">Productos</h1>
    <button onclick="abrir();" class="btn-add">Agregar Producto</button>
    <section class="container-general">
        <section class="container-table container-productos container-table-alumnos">
            <div class="table__header">Producto</div>
            <div class="table__header">Precio</div>
            <div class="table__header">Descripción</div>
            <div class="table__header">Categoría</div>
            <div class="table__header">Imagen</div>
            <div class="table__header">Operación</div>
            <?php $resultado= mysqli_query($conexion, $producto);
            while($row=mysqli_fetch_assoc($resultado)){ ?>
            <div class="table__item"><?php echo $row["Nombre"];?></div>
            <div class="table__item"><?php echo $row["Precio"];?></div>
            <div class="table__item"><?php echo $row["Descripcion"];?></div>
            <div class="table__item"><?php echo $row["Categoria"];?></div>
            <div class="table__item"><?php echo $row["Imagen"];?></div>
            <div class="table__item operation">
                <a href="panel-editar.php?id=<?php echo $row["ID"];?>" class="table__item__link" title="Editar">Editar</a>
                <a href="panel-eliminar.php?id=<?php echo $row["ID"];?>" class="table__item__link icon-eliminara" title="Eliminar">Eliminar</a>
            </div>
            <?php }?>
        </section>
    </section>
    <div id="add" class="add">
        <span onclick="cerrar();" class="icon-cancel-1"></span>
        <form action="subirProducto.php" method="post" enctype="multipart/form-data">
            <h1>Complete la información para agregar un nuevo producto</h1>
            <input name="nombre" type="text" placeholder="Nombre del Producto" required>
            <input name="precio" type="text" placeholder="Precio" required>
            <input name="descripcion" type="text" placeholder="Descripción" required>
            <select name="categoria" required>
                <option value="">Escoga la categoría</option>
                <option value="Cerveza">Cerveza</option>
                <option value="Vino">Vino</option>
                <option value="Licor">Licores</option>
            </select>
            <input name="foto" id="file" type="file" onchange="return validarExt()" required>
            <button onclick="document.getElementById('file').click()">Subir Foto</button>
            <input class="btn" type="submit" value="Añadir producto">
        </form>
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
<script src="assets/js/confirmacion.js"></script>
<script type="text/javascript">
    function validarExt(){
        var archivoInput = document.getElementById('file');
        var archivoRuta = archivoInput.value;
        var extPermitidas = /(.)$/i;
        if(!extPermitidas.exec(archivoRuta)){
            alertify.error('Hubo un error al subir la foto');
            archivoInput.value = '';
            return false;
        }
        else
        {
            if (archivoInput.files && archivoInput.files[0]) 
            {
                var visor = new FileReader();
                alertify.success('La foto se subió correctamente');
                visor.onload = function(e) 
                { 
                };
                visor.readAsDataURL(archivoInput.files[0]);
            }
        }
    }
</script>
</html>
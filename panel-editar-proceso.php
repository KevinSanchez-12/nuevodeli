<?php
include 'bd.php';
$id= $_POST['id'];
$nombre= $_POST['nombre'];
$precio= $_POST['precio'];
$descripcion= $_POST['descripcion'];
$categoria= $_POST['categoria'];
$imagen= $_POST['imagen'];
$actualizar = "UPDATE tblproductos SET id='$id', Nombre='$nombre', Precio='$precio', Descripcion='$descripcion', Categoria='$categoria', Imagen='$imagen' WHERE id='$id'";
$resultado=mysqli_query($conexion, $actualizar);
if($resultado){
    echo "<script> 
            alert('Actualización Exitosa.');
            window.location = 'productos.php'
            </script>";
} else{
    echo "<script> 
            alert('Hubo un error al actualizar.');
            window.location = 'productos.php'
            </script>";
}
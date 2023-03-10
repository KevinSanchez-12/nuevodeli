<?php
include 'bd.php';
$id= $_POST['id'];
$clave= $_POST['clave'];
$datos= $_POST['datos'];
$fecha= $_POST['fecha'];
$correo= $_POST['correo'];
$total= $_POST['total'];
$status= $_POST['status'];
$actualizar = "UPDATE tblventas SET id='$id', ClaveTransaccion='$clave', PaypalDatos='$datos', Fecha='$fecha', Correo='$correo', Total='$total', estado='$status' WHERE id='$id'";
$resultado=mysqli_query($conexion, $actualizar);
if($resultado){
    echo "<script> 
            alert('Actualización Exitosa.');
            window.location = 'ventas.php'
            </script>";
} else{
    echo "<script> 
            alert('Hubo un error al actualizar.');
            window.location = 'ventas.php'
            </script>";
}
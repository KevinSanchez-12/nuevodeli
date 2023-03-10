<?php
include 'bd.php';
$id= $_GET['id'];
$eliminar = "DELETE FROM tblproductos WHERE ID='$id'";
$resultado=mysqli_query($conexion, $eliminar);
if($resultado){
    echo "<script> 
            window.location = 'productos.php'
            </script>";
} else{
    echo "<script> 
            alert('Hubo un error al eliminar el producto.');
            window.location = 'productos.php'
            </script>";
}
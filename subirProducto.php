<?php
    include 'bd.php';
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $descripcion = $_POST["descripcion"];
    $categoria = $_POST["categoria"];
    
    $ruta_temporal = $_FILES["foto"]["tmp_name"];
    $directorio = "assets/img/productos/";
    $archivo = $directorio . basename($_FILES["foto"]["name"]);
    $tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));

    
    if(move_uploaded_file($ruta_temporal, $archivo)){
    $rutadocumento = $archivo;

    $datos_documento = "INSERT INTO tblproductos(Nombre, Precio, Descripcion, Categoria, Imagen) VALUES ('$nombre','$precio','$descripcion','$categoria','$rutadocumento')";			
    $declarar_documento = mysqli_query($conexion, $datos_documento);                                
    if($declarar_documento) {
    echo "<script> 
    alert('Producto agregado correctamente'); 
    window.location = 'productos.php'
    </script>";
    }
    }else{
    echo "<script> 
    alert('Error al agregar producto'); 
    window.location = 'productos.php'
    </script>";
    }  
?>
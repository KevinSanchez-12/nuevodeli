<?php
    include 'bd.php';
    $nombre = $_POST["nombre"];
    $comentario = $_POST["comentario"];
    $ruta_temporal = $_FILES["foto"]["tmp_name"];
    $directorio = "assets/img/usuarios/";
    $archivo = $directorio . basename($_FILES["foto"]["name"]);
    $tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
    if(move_uploaded_file($ruta_temporal, $archivo)){
    $rutadocumento = $archivo;
    $datos_documento = "INSERT INTO testimonios(foto, nombre, comentario) VALUES ('$rutadocumento','$nombre','$comentario')";			
    $declarar_documento = mysqli_query($conexion, $datos_documento);                                
    if($declarar_documento) {
    echo "<script> 
    alert('Su testimonio se envió correctamente.'); 
    window.location = 'index.php'
    </script>";
    }
    }else{
    echo "<script> 
    alert('Hubo un error.'); 
    window.location = 'index.php'
    </script>";
    }  
?>
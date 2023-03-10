<?php
    include 'global/config.php';
    include 'global/conexion.php';
    include 'bd.php';

    $mensaje = "";
    session_start();
    if(isset($_SESSION['id']) && isset($_SESSION['correo']) && isset(($_SESSION['contra']))){
        header('Location: panel.php');
    }
    if(!empty($_POST['email']) && !empty($_POST['password'])){
        session_start();
        $correo = $_POST['email'];
        $contra = $_POST['password'];
        $sql = "SELECT * FROM admi WHERE correo = '$correo'";
        $resultado = mysqli_query($conexion, $sql);
        $fila = mysqli_fetch_array($resultado);

        if($contra == $fila['contra']){
            $_SESSION['id'] = $fila['id'];
            $_SESSION['correo'] = $fila['correo'];
            $_SESSION['contra'] = $fila['contra'];
            header("Location: panel.php");
        } else {
            echo "<script>alert('Contraseña incorrecta');</script>";
        }
    }
?>
<!DOCTYPE html>
<?php include_once './templates/meta.php'?>
<html lang="es">
<body>
    <nav class="menu-admin">
        <img src="assets/img/0004.png" alt="Logotipo de NUEVO DELI">
        <h1>Tu delivery de Nuevo Chimbote</h1>
    </nav>
    <h1 class="title">Iniciar Sesión</h1>



    <form action="admin.php" method="POST">
      <input name="email" type="email" placeholder="Ingrese su correo" required>
      <input name="password" id="password" type="password" placeholder="Ingrese su contraseña" required>
      <span id="eye" class="icon-eye-1"></span>
      <input class="btn" type="submit" value="Ingresar">
    </form>



    <div class="contact">
        <p>Para asesoría técnica del sistema, contactarse por:</p>
        <div>
            <a target="_blank" href="https://api.whatsapp.com/send?phone=+51987147390&text=Hola%20Kevin%20S%C3%A1nchez,%20quiero%20asesor%C3%ADa%20t%C3%A9cnica%20para%20el%20sistema%20de%20NUEVODELI." class="icon-wspt"></a>
            <a href="tel:+51987147390" class="icon-phone"></a>
            <a target="_blank" href="mailto:kevinsanmaga12@gmail.com" class="icon-mail-alt"></a>
        </div>
    </div>
</body>
<script src="assets/js/cambiarViewPass.js"></script>
</html>
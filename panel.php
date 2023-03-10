<?php
    include 'bd.php';
    session_start();
    if(!isset($_SESSION['id']) && !isset($_SESSION['correo']) && !isset(($_SESSION['contra']))){
        header('Location: admin.php');
    }
?>
<!DOCTYPE html>
<?php include_once './templates/meta.php'?>
<html lang="es">
<body>
    <nav class="menu-admin">
        <img src="assets/img/0004.png" alt="Logotipo de NUEVO DELI">
        <h1>Tu delivery de Nuevo Chimbote</h1>
        <a href="cerrar.php"><span class="icon-logout"></span><p>Cerrar Sesión</p></a>
    </nav>
    <h1 class="title">Panel Administrador</h1>
    <div class="option">
        <div>
            <h1>Productos</h1>
            <a href="productos.php">Ver Más</a>
        </div>
        <div>
            <h1>Ventas</h1>
            <a href="ventas.php">Ver Más</a>
        </div>
        <div>
            <h1>Detalle de Ventas</h1>
            <a href="ventas-detalles.php">Ver Más</a>
        </div>
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
</html>
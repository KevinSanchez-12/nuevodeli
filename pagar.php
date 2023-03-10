<?php
    include 'global/config.php';
    include 'global/conexion.php';
    include 'carrito.php';
?>
<!DOCTYPE html>
<?php include_once './templates/meta.php'?>
<html lang="es">
<body>
<?php include_once './templates/menu.php'?>
<h1 class="title title-secondary">Ordenar Compra</h1>
<?php
    if($_POST){
        $total=0;
        $SID=session_id();
        $Nombres=$_POST['nombres'];
        $Correo=$_POST['dni'];
        foreach($_SESSION['CARRITO'] as $indice => $producto){
            $total=$total+($producto['PRECIO']*$producto['CANTIDAD']);
        }
        $sentencia=$pdo-> prepare("INSERT INTO `tblventas` (`ID`, `ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `estado`) 
        VALUES (NULL, :ClaveTransaccion, :PaypalDatos, NOW(), :Correo, :Total, 'pendiente');");
        $sentencia->bindParam(":ClaveTransaccion",$SID);
        $sentencia->bindParam(":PaypalDatos",$Nombres);
        $sentencia->bindParam(":Correo",$Correo);
        $sentencia->bindParam(":Total",$total);
        $sentencia->execute();
        $idVenta=$pdo->lastInsertId();
        foreach($_SESSION['CARRITO'] as $indice => $producto){
            $sentencia=$pdo-> prepare("INSERT INTO `tbldetalleventa` (`ID`, `IDVENTA`, `IDPRODUCTO`, `PRECIOUNITARIO`, `CANTIDAD`, `DESCARGADO`) 
            VALUES (NULL, :IDVENTA, :IDPRODUCTO, :PRECIOUNITARIO, :CANTIDAD, '0');");
            $sentencia->bindParam(":IDVENTA",$idVenta);
            $sentencia->bindParam(":IDPRODUCTO",$producto['ID']);
            $sentencia->bindParam(":PRECIOUNITARIO",$producto['PRECIO']);
            $sentencia->bindParam(":CANTIDAD",$producto['CANTIDAD']);
            $sentencia->execute();
        }

        echo "<h6>S/".$total.".00</h6>";
    }
?>
<div class="resultform">
    <div class="paso">
    <p>Paso</p>
    <h2>1</h2>
    </div>
    <h1>Realice el pago por nuestro Yape</h1>
    <img src="assets/img/qr.jpeg">
    <h1>o al <a href="wa.me/51943168899">+51 943168899</a></h1>
    <div class="paso">
    <p>Paso</p>
    <h2>2</h2>
    </div>
    <h1>Envie su DNI y VOUCHER del pago en Yape a nuestro WhatsApp para solicitar su lugar de destino y finalizar la compra.</h1>
    <div>
        <a target="_blank" href="https://api.whatsapp.com/send?phone=+51943168899&text=Hola%20NUEVO%20DELI,%20confirmo%20mi%20compra%20con%20mi%20DNI:%20">Envíe Aquí</a>
    </div>
</div>
<?php include_once './templates/footer.php'?>
<script src="assets/js/simplyCountdown.min.js"></script>
<script src="assets/js/countdown.js"></script>
</body>
</html>
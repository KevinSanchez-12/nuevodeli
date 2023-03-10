
    <nav class="menu">
        <div class="contenedor">
            <ul class="seccion-a">
                <li>
                    <a href="index.php">
                        <img src="" alt="">
                        <h1></h1>
                    </a>
                </li>
            </ul>
            <ul class="seccion-b">
                <li>
                    <a href="mostrarCarrito.php" class="icon-basket-1"><span>Mi Carrito</span></a>
                    <span class="number"><?php echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);?></span>
                </li>
            </ul>
        </div>
    </nav>
    <section class="social">
        <a target="_blank" href="https://www.facebook.com/nuevodeli" class="icon-facebook"></a>
        <a target="_blank" href="https://api.whatsapp.com/send?phone=+51943168899&text=Hola%20NUEVO%20DELI,%20tengo%20una%20consulta." class="icon-wspt"></a>
        <a href="tel: +51943168899" class="icon-phone"></a>
        <a target="_blank" href="https://goo.gl/maps/waz9L1XZTGxj4N6E8" class="icon-location-1"></a>
    </section>
    
    <div class="atencion-item ocultar">
        <h1>Atención: 8:00 am - 8:00 pm</h1>
    </div>
    <script>
    $(window).on('scroll', function () {
  if (($(window).scrollTop() + $(window).height()) == $(document).height()) {
      $('.ocultar').stop(true).animate({
          opacity: 0
      }, 250);
  } else {
      $('.ocultar').stop(true).animate({
          opacity: 1
      }, 200);
  }
});
</script>
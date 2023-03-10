<section class="comentario parallax" id="seccion">
    <div class="contenedor">
        <form action="proceso.php" method="POST" autocomplete="off" enctype="multipart/form-data">
            <input name="nombre" class="in" type="text" placeholder="Ingresa tu nombre" required>
            <textarea name="comentario" class="in" cols="30" rows="10" placeholder="Cuéntanos tu experiencia de compra" required></textarea>
            <input name="foto" type="file" id="file" onchange="return validarExt()" required>
            <button onclick="document.getElementById('file').click()">Sube tu foto de perfil</button>
            <input class="btn" type="submit" value="ENVIAR COMENTARIO">
            </form>
    </div>
</section>
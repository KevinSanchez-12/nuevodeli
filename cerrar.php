<?php 
    session_start();
    unset($_SESSION['id']);
    unset($_SESSION['correo']);
    unset($_SESSION['contra']);
    session_destroy();
    echo "
    <script> 
        location.href= 'admin.php';
    </script>
    ";
?>
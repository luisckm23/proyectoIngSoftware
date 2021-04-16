<?php
    $servername = "localhost";
    $username = "username";
    $librotheca = "librotecha";
    $conn = mysqli_connect($servername, $username, '');
    $db =  mysqli_select_db($librotheca, $conn);

    $nombre = $_POST('nombre');
    $nombre_usuario = $_POST('usuario');
    $correo_e = $_POST('e_mail');
    $contraseña = $_POST('contraseña');
    $direccion = $_POST('direccion');
    $telefono = $_POST('telefono');

    $req = (strlen($nombre) *strlen($nombre_usuario) *strlen($correo_e) *strlen($contraseña));

    mysql_query("INSERT INTO clientes VALUES ('', '$nombre', '$direccion', '$telefono', '$nombre_usuario', '$contraseña')", $link);

    echo '
        <h2>Registro completo</h2>
        <h5>Gracias por registrarse</h5>';
    
    ?>
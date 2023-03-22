<?php
if(isset($_POST['nombre']) && isset($_POST['correo']) && isset($_POST['mensaje'])){
    //Recuperar datos del formulario
    $nombre = $_POST ['nombre'];
    $correo = $_POST ['correo'];
    $mensaje = $_POST ['mensaje'];

//Conectar a la base de datos y almacenar los datos
$conexion - mysqli_connect ("localhostus-east.connect.psdb.cloud","m6ducbmxn7ad06j4tx86","pscale_pw_C9FDSJqVnl9tDXP4HsKJtEs7ZlYydeH4qcU2MkjzLQG","id20490791_bdportafolioweb");
$consulta = "INSERT INTO contactos (nombre,correo,mensaje) VALUES ('$nombre','$correo','$mensaje')";
mysqli_query($conexion, $consulta);

//Mostrar un mensaje de confirmacion al usuario
echo "Muchas gracias por contactarme";
}

else {
//si no se han enviado los datos del formulario, redirigir al usuario a la página del formulario
header("locaction: formulario_contacto.html");
exit();
}

?>
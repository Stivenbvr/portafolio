<?php
if(isset($_POST['nombre']) && isset($_POST['correo']) && isset($_POST['mensaje'])){
    //Recuperar datos del formulario
    $nombre = $_POST ['nombre'];
    $correo = $_POST ['correo'];
    $mensaje = $_POST ['mensaje'];

//Conectar a la base de datos y almacenar los datos
$conexion - mysqli_connect ("us-east.connect.psdb.cloud","h1o75fzjk3xn15mmy6xh","pscale_pw_uCfwREd7IV53l1ctTyWA8vYRj4Hqttd5ygkzxdBl5vn","dbportafolio");
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
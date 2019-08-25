<?php 
ob_start();
error_reporting(0); 
$nombre = $_POST['t_nombre']; 
$correo_electronico= $_POST['t_correo']; 
$telefono = $_POST['t_telefono']; 
$mensaje=$_POST['t_mensaje']; 
$aficiones=$_POST['comentarios']; 
$radio= $_POST['GrupoOpciones2']; 
$opinion=$_POST['opinion']; 
$header = 'From: ' . $mail . "\r\n"; 
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
$header .= "Mime-Version: 1.0 \r\n"; 
$header .= "Content-Type: text/plain"; 

$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n"; 
$mensaje .= "Su e-mail es: " . $mail . " \r\n"; 
$mensaje .= "Contenido del mensaje: " . $mensaje . " \r\n";
$mensaje .= "Telefono para contacto: " . $telefono . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time()); 

$para = 'sebasroldanm@gmail.com'; 
$asunto = 'Contactenos Página'; 

mail($para, $asunto, utf8_decode($mensaje), $header); 

echo 'Mensaje enviado correctamente';
echo $para;
echo "\n";
echo $asunto;
echo "\n";
echo $mensaje;
echo "\n";
echo $header;
echo "\n";


echo 'espere...';
header('refresh 3; url=index.html');
ob_end_flush();
?> 


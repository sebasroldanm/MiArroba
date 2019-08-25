<?php

$imagenCodificada = file_get_contents("php://input"); //Obtener la imagen
if(strlen($imagenCodificada) <= 0) exit("No se recibió ninguna imagen");
//La imagen traerá al inicio data:image/png;base64, cosa que debemos remover
$imagenCodificadaLimpia = str_replace("data:image/png;base64,", "", urldecode($imagenCodificada));

//Venía en base64 pero sólo la codificamos así para que viajara por la red, ahora la decodificamos y
//todo el contenido lo guardamos en un archivo
$imagenDecodificada = base64_decode($imagenCodificadaLimpia);

//Calcular un nombre único
$nombreImagenGuardada = "foto_" . uniqid() . ".png";

//Escribir el archivo
file_put_contents($nombreImagenGuardada, $imagenDecodificada);

//GUARDAR URL EN MYSQPL
//include("conex.php");
if(isset($nombreImagenGuardada) && !empty ($nombreImagenGuardada)
	)
{

$con=mysqli_connect('localhost','root','','foto');// or die("Problemas al conectar la base de datos");

$query = "INSERT INTO  fotos (Foto1) VALUES ('$nombreImagenGuardada' )";

mysqli_query($con, $query);// or die ("Problema conectando con la bd");
//echo"datos insertados";
//header("Refresh:3; url=panel.php");
}
else
{
//echo"problemas al insertar datos";
}
//FIN GUARDAR FOTO MYSQL

//Terminar y regresar el nombre de la foto
exit($nombreImagenGuardada);
?>
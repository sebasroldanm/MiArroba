<?php
//GUARDAR URL EN MYSQPL
//include("conex.php");
$con=mysqli_connect('localhost','root','','foto') or die("Problemas al conectar la base de datos");

$query = "SELECT Foto1 FROM fotos ORDER BY id DESC LIMIT 1";

$resultado = mysqli_query($con, $query) or die ("Problema conectando con la bd");

//echo "<img src='./".$resultado."' border='0' width='300' height='100'>";

while ($fila=mysqli_fetch_array($resultado)) {

        $ruta_img=$fila["Foto1"];
    }

echo "<img src='./".$ruta_img."ng' border='0' >";
//header("Refresh:3; url=panel.php");
//FIN GUARDAR FOTO MYSQL
?>
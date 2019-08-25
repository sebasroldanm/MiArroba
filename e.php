<?php 
    include_once('conex.php');

    $nombre = $_POST['t_nombre']; 
    $correo_electronico= $_POST['t_correo']; 
    $telefono = $_POST['t_telefono']; 
    $mensaje=$_POST['t_mensaje']; 

    session_start();
    $_SESSION['nombre'] = $nombre;
    $_SESSION['correo'] = $correo_electronico;
    $_SESSION['telefono'] = $telefono;
    $_SESSION['mensaje'] = $mensaje;

    $con=mysqli_connect($host, $user, $pw, $bd);// or die("Problemas al conectar la base de datos");

    $query = "INSERT INTO  tb_solicitudes (nombre, 
                                            correo, 
                                            telefono, 
                                            mensaje) 
                VALUES ('$nombre',
                        '$correo_electronico',
                        '$telefono',
                        '$mensaje' )";

    mysqli_query($con, $query);// or die ("Problema conectando con la bd");

    header('Location: enviado.php');
?> 
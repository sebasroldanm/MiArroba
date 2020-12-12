<?php

include_once('conex.php');

$link = mysqli_connect($host, $user, $password);

if (!$link) {
    echo "Error al conectar a la base de datos";
}

if (!mysqli_select_db($link, $database)) {
    echo "Error al seleccionar la Base de datos";
}
// mysql_connect ("mysql.webcindario.com", "sebastianroldan", "xevitax2012");

$metodo = $_SERVER["REQUEST_METHOD"];
$ruta = implode("/", array_slice(explode("/", $_SERVER["REQUEST_URI"]), 3));
$datos = json_decode(file_get_contents("php://input"));

switch ($metodo) {
    case 'GET':
        $data = [];
        $consulta = "SELECT * FROM tb_contacto";
        $datos = mysqli_query($link, $consulta);
        while ($row = mysqli_fetch_array($datos)) {
            echo ($row['nombre']) . PHP_EOL;
        }
        // return print_r(($row));
        break;
    case 'POST':
        # code...
        // echo 'POST';
        $name = $datos->nombre;
        $mail = $datos->correo;
        $phone = $datos->telefono;
        $message = $datos->mensaje;
        $date = date('Y-m-d H:i:s');
        $sql = "INSERT INTO tb_contacto (nombre, correo, telefono, mensaje, create_at) VALUES ('$name', '$mail', '$phone', '$message', '$date')";
        if (mysqli_query($link, $sql)) {
            echo "Se inserto correctamente";
        } else {
            echo "Error al insertar";
        }
        
        break;
    default:
        # code...
        echo 'ERROR';
        break;
}

// echo 'FIN DE LA FUNCIÓN';
  
?>
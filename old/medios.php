<?php
$semilla1;
$semilla2;

$semilla1 = [];
$semilla2 = [];
$resultado = [];
$res_reducido = [];
$res_decimal = [];

$valor1 = 5015;
$valor2 = 5734;
$iteraciones = 3;

$semilla1[0] = $valor1;
$semilla2[0] = $valor2;

// $i = 0;
// echo($semilla1[$i] * $semilla2[$i]);

for ($i=0; $i < $iteraciones; $i++) { 
    $multiplicacion = $semilla1[$i] * $semilla2[$i];
    array_push($resultado, $multiplicacion);
    array_push($semilla1, $semilla2[$i]);

    if(strlen( $resultado[$i])%2 == 0){
        array_push($res_reducido, substr($resultado[$i], 2, 4) );
        array_push($res_decimal, $res_reducido[$i] / 10000 );
        array_push($semilla2, $res_reducido[$i]);
    }
    else{
        array_push($res_reducido, substr($resultado[$i], 2, 4) );
        array_push($res_decimal, $res_reducido[$i] / 10000 );
        array_push($semilla2, $res_reducido[$i]);
    }
}

echo("\n\n");
for ($i=0; $i < $iteraciones; $i++) { 
    echo ("\nNumeros: ".$semilla1[$i]." y ".$semilla2[$i]."" );
    echo("\tResultado: ". $resultado[$i]);
    echo("\tResultado reducido: ". $res_reducido[$i]);
    echo("\tResultado decima: ". round($res_decimal[$i], 4));
}



// echo ("\n\nNumeros: ".$semilla1[1]." y ".$semilla2[0]."\n\n" );


// for ($i=0; $i < 3; $i++) { 
//     echo("\nResultado: ".$datos[$i]);
// }
?>
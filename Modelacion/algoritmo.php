<?php
class algoritmo
{
    public static function resolver($num1, $num2, $itera)
    {
        $semilla1 = [];
        $semilla2 = [];
        $resultado = [];
        $res_reducido = [];
        $res_decimal = [];

        $semilla1[0] = $num1;
        $semilla2[0] = $num2;

        for ($i = 0; $i < $itera; $i++) {
            $multiplicacion = $semilla1[$i] * $semilla2[$i];
            array_push($resultado, $multiplicacion);
            array_push($semilla1, $semilla2[$i]);

            if (strlen($resultado[$i]) % 2 == 0) {
                array_push($res_reducido, substr($resultado[$i], 2, 4));
                array_push($res_decimal, $res_reducido[$i] / 10000);
                array_push($semilla2, $res_reducido[$i]);
            } else {
                array_push($res_reducido, substr($resultado[$i], 2, 4));
                array_push($res_decimal, $res_reducido[$i] / 10000);
                array_push($semilla2, $res_reducido[$i]);
            }
        }


        for ($i = 0; $i < $itera; $i++) {
?>
            <tr>
                <td><?php echo ("\n(" . $semilla1[$i] . ")(" . $semilla2[$i] . ")"); ?></td>
                <td><?php echo ($resultado[$i]); ?></td>
                <td><?php echo ($res_reducido[$i]); ?></td>
                <td><?php echo (round($res_decimal[$i], 4)); ?></td>
            </tr>
<?php

        }
    }
}

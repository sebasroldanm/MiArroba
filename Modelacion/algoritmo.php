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
?>
        <div class="row">

            <div class="col-sm-6">
                <div class="mx-auto" style="width: 200px;">
                    Aleatorio Minino:
                    <span class="badge badge-dark">
                        <?php echo min($res_decimal); ?>
                    </span>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mx-auto" style="width: 200px;">
                    Aleatorio Máximo:
                    <span class="badge badge-dark">
                        <?php echo max($res_decimal) ?>
                    </span>
                </div>
            </div>
        </div>
        <hr>
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>Iteraciones</th>
                    <th>Y</th>
                    <th>Resultado</th>
                    <th>Reducido</th>
                    <th>Aleatorio</th>
                </tr>
            </thead>
            <tbody>

                <?php
                for ($i = 0; $i < $itera; $i++) {
                    $iteraciones = $i + 1;
                ?>

                    <tr>
                        <td><?php echo $iteraciones ?></td>
                        <td><?php echo ("\n(" . $semilla1[$i] . ")(" . $semilla2[$i] . ")"); ?></td>
                        <td><?php echo ($resultado[$i]); ?></td>
                        <td><?php echo ($res_reducido[$i]); ?></td>
                        <td><?php echo (round($res_decimal[$i], 4)); ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
<?php
    }
}

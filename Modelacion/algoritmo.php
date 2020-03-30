<?php
error_reporting(0);
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

            <div class="col-sm-4">
                <div class="mx-auto" style="width: 200px;">
                    Aleatorio Minino:
                    <span class="badge badge-dark">
                        <?php echo min($res_decimal); ?>
                    </span>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="mx-auto" style="width: 200px;">
                    Aleatorio Máximo:
                    <span class="badge badge-dark">
                        <?php echo max($res_decimal) ?>
                    </span>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="mx-auto" style="width: 200px;">
                    Promedio:
                    <span class="badge badge-dark">
                        <?php echo round(array_sum($res_decimal)/count($res_decimal), 6) ?>
                    </span>
                </div>
            </div>
        </div>
        <hr>
        <table id="example" class="table table-hover dt-responsive nowrap" style="width:100%">
            <thead class="thead-light">
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
                        <td><?php 
                        if(count(str_split($res_decimal[$i]))  > 5){
                            echo (round($res_decimal[$i], 4)); 
                        }
                        else{
                            echo (round($res_decimal[$i], 4))."0"; 
                        }
                        ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
<?php
    }
}

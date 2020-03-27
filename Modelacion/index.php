<!DOCTYPE html>
<html lang="en">

<head>
    <title>Modelación</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="jumbotron text-center">
        <h1>Algoritmo Productos Medios</h1>
        <p>El algoritmo de productos medios requiere dos semillas, ambas con N dgitos</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h2>Formulario de Datos</h2>
                <p>Por favor digitar los valores:</p>
                <form action="index.php" method="POST">
                    <div class="form-group">
                        <label for="number">Semilla 1</label>
                        <input type="number" class="form-control" placeholder="Valor de la semilla 1 (5015 por defecto)" name="input_semilla1">
                    </div>
                    <div class="form-group">
                        <label for="number">Semilla 2</label>
                        <input type="number" class="form-control" placeholder="Valor de la semilla 2 (5734 por defecto)" name="input_semilla2">
                    </div>
                    <div class="form-group">
                        <label for="number">Numero de Iteraciones</label>
                        <input type="number" class="form-control" placeholder="Por defecto 30" name="input_iteraciones">
                    </div>
                    <button type="submit" class="btn btn-success" name="calcular">Calcular</button>
                    <input type="button" value="Limpiar" class="btn btn-outline-info" onclick="window.location='https://yohanroldan.webcindario.com/Modelacion/'">
                </form>

            </div>

            <div class="col-sm-8">
                <h2>Tabla de Resultados</h2>
                <p>Se determino que este modelo no repite una secuencia</p>

                <?php
                include("algoritmo.php");
                if (isset($_REQUEST['calcular'])) {
                    $n1 = $_REQUEST['input_semilla1'];
                    $n2 = $_REQUEST['input_semilla2'];
                    $ite = $_REQUEST['input_iteraciones'];

                    if (empty($n1)) {
                        $n1 = 5015;
                    }
                    if (empty($n2)) {
                        $n2 = 5734;
                    }
                    if (empty($ite)) {
                        $ite = 30;
                    }
                    

                    algoritmo::resolver($n1, $n2, $ite);
                }
                ?>

            </div>
        </div>

</body>

</html>
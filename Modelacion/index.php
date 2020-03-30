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

    <!-- Boostrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
    <!-- Boostrap -->

    <!-- Semantic UI -->
    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.semanticui.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.semanticui.min.css"> -->
    <!-- Semantic UI -->
</head>

<script>
    $(document).ready(function() {
        $('#example').dataTable({
            "language": {
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "Nada encontrado - Sorry",
                "info": "Mostrando la página _PAGE_ de _PAGES_",
                "infoEmpty": "No hay registros disponibles.",
                "infoFiltered": "(filtrado de _MAX_ registros totales)"
            }
        });
    });
</script>

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

<!-- Footer -->
<footer class="page-footer font-small unique-color-dark pt-4">

    <!-- Footer Elements -->
    <div class="container">

        <!-- Call to action -->
        <ul class="list-unstyled list-inline text-center py-2">
            <li class="list-inline-item">
                <h5 class="mb-1">Yohan Sebastian Roldan</h5>
            </li>
            <li class="list-inline-item">
                <h5 class="mb-1"> - Cod. 461215161</h5>
            </li>
            <li class="list-inline-item">
                <h5 class="mb-1"> - Modelación</h5>
            </li>
            <hr>
            <li class="list-inline-item">
                <p>Len
                    guaje:</p>
            </li>
            <li class="list-inline-item">
                <p> php - JQuery</p>
            </li>

        </ul>
        <!-- Call to action -->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <!-- <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
    </div> -->
    <!-- Copyright -->

</footer>
<!-- Footer -->

</html>
<?php
include './templates/nav.php';
include './model/bd.php';
$sql = "SELECT i.totalIngreso, e.totalEgreso FROM ingresos i, egresos e";
$query = $conn->prepare($sql);
$query->execute();
$res = $query->fetchAll();

$total = 0;
foreach ($res as $ingreso) { 
    $total =  $ingreso['totalIngreso'] - $ingreso['totalEgreso']; 
} 
?>

<div class="container">

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title text-center"><i class="fa fa-user"></i> INGRESOS</h5>
                </div>
                <div class="card-footer text-center">
                    <a href="./views/ingresoTable.php" class="card-link">VER TABLA</a> | <a href="./views/ingresoForm.php">CREAR INGRESO</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title text-center"><i  class="fa fa-user"></i> EGRESOS </h5>
                </div>
                <div class="card-footer text-center">
                    <a href="./views/egresoTable.php" class="card-link">VER TABLA</a> | <a href="./views/egresoForm.php">CREAR EGRESO</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title text-center"><i class="fa fa-user"></i> TOTAL CONSOLIDADO</h5>
                </div>
                <div class="card-footer text-center">
                    <!-- <a href="#" class="card-link">VER VER TABLA</a> -->
                    <strong><p>TOTAL: <?php echo $total ?></p></strong>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header text-center">
            <h1>Facturado</h1>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>FECHA</th>
                        <th>CLIENTE</th>
                        <th>VALOR TOTAL</th>
                        <th>ESTADO</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                        <th>1</th>
                        <th>12/20/2020</th>
                        <th>Prueba</th>
                        <th>140$</th>
                        <th><span><span class="badge badge-warning">Pendiente</span></span></th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
include './templates/footer.php'
?>
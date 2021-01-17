<?php
include './templates/nav.php';
include './model/bd.php';


$sql = "SELECT i.totalIngreso FROM ingresos i";
$query = $conn->prepare($sql);
$query->execute();
$res = $query->fetchAll();

$sqle = "SELECT e.totalEgreso FROM egresos e";
$querye = $conn->prepare($sqle);
$querye->execute();
$resegre = $querye->fetchAll();

$totalI = 0;
$totale = 0;
$totalC = 0;
foreach ($res as $ingreso) { 
    $totalI +=  $ingreso['totalIngreso']; 
} 

foreach ($resegre as $egreso) { 
    $totale +=  $egreso['totalEgreso']; 
} 

$totalC = $totalI - $totale;

?>

<style>
div.ex1 {
  overflow: scroll;
}
</style>

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
                    <strong><p>TOTAL: <?php echo $totalC ?></p></strong>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header text-center">
            <h1>REPORTE GENERAL</h1>
            <form method="POST" action="index.php">
                <select name="filterMochis">
                <option value="">...</option>
                <option value="pichincha">pichincha</option>
                <option value="produbanco">produbanco</option>
                </select>
                <input type="submit" name="submit" value="Filtrar">
            </form>
        </div>
        <div class="card-body" style="margin-bottom: 100px;">
          <div class="ex1">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Cliente</th>
                        <th>Sector</th>
                        <th>Banco</th>
                        <th>Caja de mochi</th>
                        <th>Cantidad</th>
                        <th>Costo envio</th>
                        <th>Venta</th>
                        <th>Total ingreso</th>
                        <th>Comentario</th>
                        <th>Hora entrega</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                
                <tbody class="mb-4 pb-4">
                <?php 
    
                if(isset($_POST['submit'])){
                    
                    $filterCheck = $_POST['filterMochis'];
                    
                    $sql = "SELECT * FROM ingresos WHERE banco = '$filterCheck'";
                    $query = $conn->prepare($sql);
                    $query->execute();
                    $resfilter = $query->fetchAll();
                    
                    
                    foreach ($resfilter as $filter) { ?>
                     
                        <tr>
                            <td><?php echo $filter['idIngreso'] ?></td>
                            <td><?php echo $filter['nombreIngreso'] ?></td>
                            <td><?php echo $filter['sector'] ?></td>
                            <td><?php echo $filter['banco'] ?></td>
                            <td><?php echo $filter['cajaMochi'] ?></td>
                            <td><?php echo $filter['cantidad'] ?></td>
                            <td><?php echo $filter['envio'] ?></td>
                            <td><?php echo $filter['venta'] ?></td>
                            <td><?php echo $filter['totalIngreso'] ?></td>
                            <td><?php echo $filter['comentario'] ?></td>
                            <td><?php echo $filter['hora_entrega'] ?></td>
                            <td><?php echo $filter['fecha'] ?></td>
                        </tr>
                    <?php
                    }
                }
                ?>
               
                </tbody>
              </div>
            </table>
        </div>
    </div>
</div>

<?php
include './templates/footer.php'
?>
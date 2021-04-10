<?php 
include "../templates/nav.php";
include '../model/bd.php';

// $results_per_page = 10;

$sql = "SELECT * FROM egresos";
$query = $conn->prepare($sql);
$query->execute();
$res = $query->fetchAll();

// $numbers_of_results = count($res);
// $number_of_pages = ceil($numbers_of_results/$results_per_page);

// if(!isset($_GET['page'])){
//     $page = 1;
// }else{
//     $page = $_GET['page'];
// }

// $this_page_first_result = ($page-1)*$results_per_page;

// //new query
// $sql = "SELECT * FROM egresos LIMIT " . $this_page_first_result . ',' . $results_per_page;
// $query = $conn->prepare($sql);
// $query->execute();
// $res = $query->fetchAll();
?>

<style>
div.ex1 {
  overflow: scroll;
  height: 700px;
}
</style>

<div class="container mt-4">
        <p>Buscar en página:</p>    
    <div class="pagination_mochis">
        <?php //for($page=1;$page <= $number_of_pages;$page++) { ?>
                <!-- <a href="ingresoTable.php?page='. $page .'"><?php //echo $page ?></a> -->
        <?php //} ?>
    </div>
    <div class="card">
        <div class="card-header">
            <table class="width:100%">
                <tr>
                    <td>
                        <h3>Tabla de egresos</h3>
                    </td>
                   
                    <td><a href="egresoForm.php" class="btn btn-success"><i class="fa fa-plus"></i>Agregar nuevo egreso</a></td>
            
                </tr>
            </table>
        </div>
        <div class="body">
           <div class="ex1">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Nombre egreso</th>
                        <th>Forma de pago</th>
                        <th>Cantidad producto/servicio</th>
                        <th>costo</th>
                        <th>Total egreso</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $suma = 0;
                    foreach ($res as $egreso) { ?>
                        <?php $suma = $suma + $egreso['totalEgreso'] ?>
                        <tr>
                            <td><?php echo $egreso['idEgreso'] ?></td>
                            <td><?php echo $egreso['nombreEgreso'] ?></td>
                            <td><?php echo $egreso['banco'] ?></td>
                            <td><?php echo $egreso['cantidad'] ?></td>
                            <td><?php echo $egreso['costo'] ?></td>
                            <td><?php echo $egreso['totalEgreso'] ?></td>
                            <td><?php echo $egreso['fecha'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
                </div>
            </table>
        </div>
    </div>
    <div class="d-flex bg-secondary marginb">
    <div class="p-2 mr-auto text-white"><strong><p>Total:</p></strong></div>
    <div class="p-2 mr-5 text-white"><strong><p><?php echo $suma ?></p></strong></div>
    </div>
    
<?php 
include "../templates/footer.php"
?>
</div>

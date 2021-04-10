<?php 
include "../templates/nav.php";
include '../model/bd.php';

// $results_per_page = 15;

$sql = "SELECT * FROM ingresos";
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

//new query
// $sql = "SELECT * FROM ingresos LIMIT " . $this_page_first_result . ',' . $results_per_page;
// $query = $conn->prepare($sql);
// $query->execute();
// $resPagination = $query->fetchAll();

?>

<style>
div.ex1 {
  overflow: scroll;
  height: 700px;
}
</style>

<!-- <div class="container mt-4">
    <p>Buscar en página:</p>
<div class="pagination_mochis"> -->

</div>

    <div class="card">
        <div class="card-header">
            <table class="width:100%">
                <tr>
                    <td>
                        <h3>Tabla de ingresos</h3>
                    </td>
                   
                    <td><a href="ingresoForm.php" class="btn btn-success"><i class="fa fa-plus"></i>Agregar nuevo ingreso</a></td>
            
                </tr>
            </table>
        </div>
        <div class="body">
           <div class="ex1">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Cliente</th>
                        <th>Sector</th>
                        <th>Forma de pago</th>
                        <th>Caja de mochi</th>
                        <th>Love Potion</th>
                        <th>Polar</th>
                        <th>Chocolate</th>
                        <th>Sunshine</th>
                        <th>Kissme</th>
                        <th>Beachy</th>
                        <th>Konnichiwa</th>
                        <th>Caramel Coffee</th>
                        <th>Cookie monster</th>
                        <th>Sabor de temporada</th>
                        <th>Adicional</th>
                        <th>Cantidad</th>
                        <th>Costo envio</th>
                        <th>Venta</th>
                        <th>Total ingreso</th>
                        <th>Comentario</th>
                        <th>Hora entrega</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                     $suma = 0;
                    foreach ($res as $ingreso) { ?>
                     <?php $suma = $suma + $ingreso['totalIngreso'] ?>
                        <tr>
                            <td><?php echo $ingreso['idIngreso'] ?></td>
                            <td><?php echo $ingreso['nombreIngreso'] ?></td>
                            <td><?php echo $ingreso['sector'] ?></td>
                            <td><?php echo $ingreso['banco'] ?></td>
                            <td><?php echo $ingreso['cajaMochi'] ?></td>
                            <td><?php echo $ingreso['lp'] ?></td>
                            <td><?php echo $ingreso['po'] ?></td>
                            <td><?php echo $ingreso['cho'] ?></td>
                            <td><?php echo $ingreso['sun'] ?></td>
                            <td><?php echo $ingreso['ki'] ?></td>
                            <td><?php echo $ingreso['be'] ?></td>
                            <td><?php echo $ingreso['ko'] ?></td>
                            <td><?php echo $ingreso['cc'] ?></td>
                            <td><?php echo $ingreso['cm'] ?></td>
                            <td><?php echo $ingreso['temp'] ?></td>
                            <td><?php echo $ingreso['adicional'] ?></td>
                            <td><?php echo $ingreso['cantidad'] ?></td>
                            <td><?php echo $ingreso['envio'] ?></td>
                            <td><?php echo $ingreso['venta'] ?></td>
                            <td><?php echo $ingreso['totalIngreso'] ?></td>
                            <td><?php echo $ingreso['comentario'] ?></td>
                            <td><?php echo $ingreso['hora_entrega'] ?></td>
                            <td><?php echo $ingreso['fecha'] ?></td>
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
    <div class="p-2 mr-5 text-white"><strong><p><?php echo number_format($suma) ?></p></strong></div>
    </div>
</div>

<?php 
include "../templates/footer.php"
?>

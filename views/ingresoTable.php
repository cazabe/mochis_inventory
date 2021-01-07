<?php 
include "../templates/nav.php";
include '../model/bd.php';
$sql = "SELECT * FROM ingresos";
$query = $conn->prepare($sql);
$query->execute();
$res = $query->fetchAll();
?>

<div class="container mt-4">

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
            <table class="table">
                <thead class="thead-dark">
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
            </table>
        </div>
    </div>
    <div class="d-flex bg-secondary marginb">
    <div class="p-2 mr-auto text-white"><strong><p>Total:</p></strong></div>
    <div class="p-2 mr-5 text-white"><strong><p><?php echo $suma ?></p></strong></div>
    </div>
</div>

<?php 
include "../templates/footer.php"
?>

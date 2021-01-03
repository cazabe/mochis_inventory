<?php 
include "../templates/nav.php";
include '../model/bd.php';

$sql = "SELECT * FROM egresos";
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
                        <h3>Tabla de egresos</h3>
                    </td>
                   
                    <td><a href="egresoForm.php" class="btn btn-success"><i class="fa fa-plus"></i>Agregar nuevo egreso</a></td>
            
                </tr>
            </table>
        </div>
        <div class="body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Nombre egreso</th>
                        <th>Banco</th>
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
            </table>
        </div>
    </div>
    <div class="d-flex bg-secondary">
    <div class="p-2 mr-auto text-white"><strong><p>Total:</p></strong></div>
    <div class="p-2 mr-5 text-white"><strong><p><?php echo $suma ?></p></strong></div>
    </div>
</div>

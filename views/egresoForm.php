<?php 
include "../templates/nav.php"
?>

<div class="container"> 

<h1>Crear Egreso</h1>

<form>
  <div class="form-group row mt-5">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre del egreso:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Ingresa nombre del cliente">
    </div>
  </div>

  <div class="form-group row mt-5">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Cantidad:</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="cantidad" placeholder="Ingrese lo que se cobro de envio">
    </div>
  </div>

  <div class="form-group row mt-5">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Costo:</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="costo" placeholder="costo del producto o servicio">
    </div>
  </div>

  <div class="form-group row mt-5">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Total Egreso:</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="total" placeholder="Total egreso" disabled>
    </div>
  </div>

  

  <div class="form-group row mt-5">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Guardar egreso</button>
    </div>
  </div>
</form>
</div>


<?php 
include "../templates/footer.php"
?>

<script>

console.log("funcionando js");


$( "#costo" ).keyup(function() {
  let cant = $("#cantidad").val();
  let cost = $("#costo").val();
  const total = cant * cost; 
  $("#total").val(total);
});

</script>
<?php 
include "../templates/nav.php"
?>

<div class="container"> 

<h1>Crear Ingreso</h1>

<form>
  <div class="form-group row mt-5">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre cliente:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Ingresa nombre del cliente">
    </div>
  </div>
  
  <fieldset class="form-group mt-5">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Seleccione la caja comprada:</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="caja3" value="caja3">
          <label class="form-check-label" for="gridRadios1">
            Caja 3
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="caja6" value="caja6">
          <label class="form-check-label" for="gridRadios2">
            Caja 6
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="caja9" value="caja9">
          <label class="form-check-label" for="gridRadios3">
            Caja 9
          </label>
        </div>
      </div>
    </div>
  </fieldset>

  <div class="form-group row mt-5">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Cobro envio:</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="envio" placeholder="Ingrese lo que se cobro de envio">
    </div>
  </div>

  <div class="form-group row mt-5">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Cobro cliente:</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="cobroCliente" placeholder="cobro al cliente" disabled>
    </div>
  </div>

  <div class="form-group row mt-5">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Total:</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="totalI" placeholder="Total ingreso" disabled>
    </div>
  </div>

  

  <div class="form-group row mt-5">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Guardar ingreso</button>
    </div>
  </div>
</form>
</div>
<?php 
include "../templates/footer.php"
?>

<script>


$( "#caja3" ).click(function() {
  $("#cobroCliente").val(6);
});

$( "#caja6" ).click(function() {
  $("#cobroCliente").val(9);
});

$( "#caja9" ).click(function() {
  $("#cobroCliente").val(12);
});

$( "#envio" ).keyup(function() {
  let cobroC = parseInt($("#cobroCliente").val());
  let envio = parseFloat($("#envio").val());
  const total = envio + cobroC; 
  $("#totalI").val(total);
  console.log(typeof total);
});


</script>
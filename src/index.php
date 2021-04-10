<?php
session_start();
include './model/bd.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" crossorigin="anonymous"/>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <!-- roboto font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <!-- Style -->
    <link rel="stylesheet" href="./style/login.css">

    <title>Mochis</title>
</head>
<body>
<div class="d-md-flex half">
    <div class="bg" style="background-image: url('img/mochis_ec2.png');"></div>
    <div class="contents">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="form-block mx-auto">
              <div class="text-center mb-5">
              <img src="img/mochis-removebg-preview.png" style="height:100px"/>
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              </div>
              <form action="controller/loginC.php" method="POST">
                <div class="form-group first">
                  <label for="Usuario">Usuario</label>
                  <input class="form-control" name="usuario" placeholder="Usuario" />
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Contraseña</label>
                  <input class="form-control" type="password" name="password" placeholder="Contraseña" />
                </div>
                

                <input type="submit" value="Acceder" class="btn btn-block btn-primary">

              </form>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </div>
</body>
</html>



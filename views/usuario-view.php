<?php

include ('../src/model/user.php');
session_start();
$user = new User();
$usuarios = $user->findById($_GET["id"]);
$users = $usuarios->fetch_assoc();

if ($usuarios-> num_rows > 0) {

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/NightmareFoxy1100000(Renan)/Expert/config/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>See User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

<section class="vh-100 gradient-custom">
    <?php include('nav-bar.php'); ?>
    <div class="container mt-5">
      <div class="row">
        <div class="card bg-dark text-white">
          <div class="card-header">
            <h4>Usuario <a href="../lista-usuario.php" class="btn btn-primary float-end">Voltar</a></h4>

          </div>
          <div class="card-body">

            <div class="mb-3">
                <label>ID</label>
                <p><?php echo $users["id"] ?></p>
            </div>
            <div class="mb-3">
                <label>Nome</label>
                <p><?php echo $users["nome"] ?></p>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <p><?php echo $users["email"] ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<?php }else{  ?>


 <?php include("usuario-nao-encontrado.php"); ?>

 <?php
 }
?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
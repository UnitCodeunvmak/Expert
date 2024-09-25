<?php 

include('../src/model/user.php');
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
  <title>Edit User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

<section class="vh-100 gradient-custom">
    <?php include('nav-bar.php'); ?>
    <div class="container mt-5">
      <div class="row">
        <div class="card bg-dark text-white ">
          <div class="card-header">
            <h4>Editar Informações do Usuario <a href="/NightmareFoxy1100000(Renan)/Expert/views/lista-usuario.php" class="btn btn-danger float-end">Cancelar</a></h4>

          </div>
          <div class="card-body">
            <form action="/NightmareFoxy1100000(Renan)/Expert/config/acoes.php" method="POST">
            <div class="mb-3">
                <label>Id</label>
                <input type="text" name="id" class="form-control" value=<?= $users["id"] ?>>
              </div>
              <div class="mb-3">
                <label>Nome</label>
                <input type="text" name="nome" class="form-control" value=<?= $users["nome"] ?>>
              </div>
              <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value=<?= $users["email"] ?>>
              </div>
              <div class="mb-3">
                <label>Senha</label>
                <input type="password" name="senha" class="form-control" value=<?= $users["senha"] ?>>
              </div>
              <div class="mb-3">
                <button class="btn btn-primary" type="submit" name="editar_usuario">Salvar</button>
              </div>
            </form>
          </div>

          <?php
          }else{
            include("usuario-nao-encontrado.php");
          };
          ?>

        </div>
      </div>
    </div>
</section>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
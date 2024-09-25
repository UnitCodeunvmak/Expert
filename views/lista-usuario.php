<?php

require_once ('../src/model/user.php');
session_start();
$user = new User();
$usuarios = $user->listUser();

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Users List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <section class="vh-100 gradient-custom">
    <?php include('nav-bar.php'); ?> 
      <div class="container mt-4">
      <?php include('mensagem.php') ?>
        <div class="row">
          <div class="card bg-dark text-white">
            <div class="card-header">
              <h4>Lista de Usuarios <a href="cadastra-usuario.php" class="btn btn-primary float-end">Cadastrar Usuario</a></h4>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            <div class="card-body">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th class="bg-dark text-white">ID</th>
                    <th class="bg-dark text-white">Nome</th>
                    <th class="bg-dark text-white">Email</th>
                    <th class="bg-dark text-white ">Ações</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                    if(mysqli_num_rows($usuarios) > 0){
                      foreach($usuarios as $usuario){
                  
                  ?>
                  <tr>
                    <td class="bg-dark text-white"><?= $usuario['id'] ?></td>
                    <td class="bg-dark text-white"><?= $usuario['nome'] ?></td>
                    <td class="bg-dark text-white"><?= $usuario['email'] ?></td>
                    <td class="bg-dark text-white">
                      <a href="usuario-view.php/?id=<?php echo($usuario["id"]) ?>" class="btn btn-secondary btn-sm">Visualizar</a>
                      <a href="editar-usuario.php/?id=<?php echo($usuario["id"]) ?>" class="btn btn-success btn-sm">Editar</a>
                      <form action="../config/acoes.php" method="POST" class="d-inline bg-dark text-white">
                          <button onclick="return confirm('Você deseja mesmo DELETAR este usuario?')" type="submit" name="deleta_usuario" value="<?= $usuario["id"] ?>" class="btn btn-danger btn-sm">Excluir </button>
                      </form>
                    </td>
                  </tr>
                  <?php 
                      }
                    }else{
                      include("usuario-nao-encontrado.php");
                    }
                  
                  ?>
                </tbody>

              </table>

            </div>

          </div>

        </div>

      </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
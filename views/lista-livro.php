<?php

include ('../src/model/livro.php');
session_start();
$livro = new Livro();
$livros = $livro->listBook();

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Books List</title>
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
              <h4>Lista de Livros <a href="cadastra-livro.php" class="btn btn-primary float-end">Cadastrar Livro</a></h4>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
            <div class="card-body">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th class="bg-dark text-white">ID</th>
                    <th class="bg-dark text-white">Titulo</th>
                    <th class="bg-dark text-white">Autor</th>
                    <th class="bg-dark text-white">Editora</th>
                    <th class="bg-dark text-white">Ano</th>
                    <th class="bg-dark text-white">Categoria</th>
                    <th class="bg-dark text-white">Ações</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                    if(mysqli_num_rows($livros) > 0){
                      foreach($livros as $livro){
                  
                  ?>
                  <tr>
                    <td class="bg-dark text-white"><?= $livro['id'] ?></td>
                    <td class="bg-dark text-white"><?= $livro['titulo'] ?></td>
                    <td class="bg-dark text-white"><?= $livro['autor'] ?></td>
                    <td class="bg-dark text-white"><?= $livro['editora'] ?></td>
                    <td class="bg-dark text-white"><?= $livro['ano'] ?></td>
                    <td class="bg-dark text-white"><?= $livro['categoria'] ?></td>
                    <td class="bg-dark text-white">
                      <a href="livro-view.php/?id=<?php echo($livro["id"]) ?>" class="btn btn-secondary btn-sm">Visualizar</a>
                      <a href="editar-livro.php/?id=<?php echo($livro["id"]) ?>" class="btn btn-success btn-sm">Editar</a>
                      <form action="../config/acoes.php" method="POST" class="d-inline bg-dark text-white">
                          <button onclick="return confirm('Você deseja mesmo DELETAR este livro?')" type="submit" name="deleta_livro" value="<?= $livro["id"] ?>" class="btn btn-danger btn-sm">Excluir </button>
                      </form>
                    </td>
                  </tr>
                  <?php 
                      }
                    }else{
                      echo '<h5>Nenhum Usuário encontrado</h5>';
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
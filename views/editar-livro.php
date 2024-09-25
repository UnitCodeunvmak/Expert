<?php

include('../src/model/livro.php');
$livro = new Livro();
$livros = $livro->findById($_GET["id"]);
$livro_list = $livros->fetch_assoc();



if ($livros->num_rows > 0) {

?>

  <!doctype html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/NightmareFoxy1100000(Renan)/Expert/config/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Livro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <body>

    <section class="vh-100 gradient-custom">
      <?php include('nav-bar.php'); ?>
      <div class="container mt-5">
        <div class="row">
          <div class="card bg-dark text-white ">
            <div class="card-header">
              <h4>Editar Informações do Livro <a href="/NightmareFoxy1100000(Renan)/Expert/views/lista-livro.php" class="btn btn-danger float-end">Cancelar</a></h4>

            </div>
            <div class="card-body">
              <form action="/NightmareFoxy1100000(Renan)/Expert/config/acoes.php" method="POST">
                <div class="mb-3">
                  <label>Id</label>
                  <input type="text" name="id" class="form-control" value="<?= $livro_list["id"] ?>">
                </div>
                <div class="mb-3">
                  <label>Titulo</label>
                  <input type="text" name="titulo" class="form-control" value="<?= $livro_list["titulo"]?>">
                </div>
                <div class="mb-3">
                  <label>Autor</label>
                  <input type="text" name="autor" class="form-control" value="<?= $livro_list["autor"] ?>">
                </div>
                <div class="mb-3">
                  <label>Editora</label>
                  <input type="text" name="editora" class="form-control" value="<?= $livro_list["editora"] ?>">
                </div>
                <div class="mb-3">
                  <label>Ano</label>
                  <input type="text" name="ano" class="form-control" value="<?= $livro_list["ano"] ?>">
                </div>
                <div class="mb-3">
                  <label>Categoria</label>
                  <input type="text" name="categoria" class="form-control" value="<?= $livro_list["categoria"] ?>">
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary" type="submit" name="editar_livro">Salvar</button>
                </div>
              </form>
            </div>

          <?php
        } else {
          include("livro-nao-encontrado.php");
        };
          ?>

          </div>
        </div>
      </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>

  </html>
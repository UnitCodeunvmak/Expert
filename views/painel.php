<?php
include('../config/protect.php');
include ('../src/model/livro.php');
$livro = new Livro();
$livros = $livro->listBook();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../config/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pannel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
  <?php include('nav-bar.php'); ?>

  <section class="vh-100 gradient-custom">

    <h1 class="top-40 start-50 text-center">Welcome <?php echo ($_SESSION['nome']) ?> </h1>
    <h2 class="top-40 start-50 text-center">Livros </h2>

    <div class="container-fluid">
      <div class="row row-cols-1 row-cols-md-3 g-4">

      <?php
        if (mysqli_num_rows($livros) > 0) {
          foreach ($livros as $livro) {

        ?>

        <div class="col">
          <div class="card h-100 bg-dark text-light">
            <img src="../img/purple-book.jpg" class="card-img-top" alt="..." class="livro-img">
            <div class="card-body">
              <h5 class="card-title"><?= $livro['titulo'] ?></h5>
              <p class="card-text">                                                </p>
            </div>
            <div class="card-footer">
              <small class="text-light"><?= $livro['autor'] ?></small>
            </div>
            <div class="card-footer">
              <small class="text-light"><?= $livro['editora'] ?></small>
            </div>
            <div class="card-footer">
              <small class="text-light"><?= $livro['ano'] ?></small>
            </div>
            <div class="card-footer">
              <small class="text-light"><?= $livro['categoria'] ?></small>
            </div>
          </div>
        </div>
        <?php
          }
        } else {
          echo '<h5>Nenhum Usuário encontrado</h5>';
        }

        ?>

      </div>
    </div>

  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
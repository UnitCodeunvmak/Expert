<?php

include ('../src/model/livro.php');
#session_start();
$livro = new Livro();
$livros = $livro->findById($_GET["id"]);
$livro_list = $livros->fetch_assoc();

if ($livros-> num_rows > 0) {

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/NightmareFoxy1100000(Renan)/Expert/config/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>See Livro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

<section class="vh-100 gradient-custom">
    <?php include('nav-bar.php'); ?>
    <div class="container mt-5">
      <div class="row">
        <div class="card bg-dark text-white">
          <div class="card-header">
            <h4>Livro <a href="../lista-livro.php" class="btn btn-primary float-end">Voltar</a></h4>

          </div>
          <div class="card-body">

            <div class="mb-3">
                <label>ID</label>
                <p><?php echo $livro_list["id"] ?></p>
            </div>
            <div class="mb-3">
                <label>Titulo</label>
                <p><?php echo $livro_list["titulo"] ?></p>
            </div>
            <div class="mb-3">
                <label>Autor</label>
                <p><?php echo $livro_list["autor"] ?></p>
            </div>
            <div class="mb-3">
                <label>Editora</label>
                <p><?php echo $livro_list["editora"] ?></p>
            </div>
            <div class="mb-3">
                <label>Ano</label>
                <p><?php echo $livro_list["ano"] ?></p>
            </div>
            <div class="mb-3">
                <label>Categoria</label>
                <p><?php echo $livro_list["categoria"] ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<?php }else{  ?>


 <div class="alert alert-danger alert-dismissible" role="alert">
        Livro não encontrado
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

 <?php
 }
?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
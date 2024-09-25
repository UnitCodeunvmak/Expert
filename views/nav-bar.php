<?php include("../config/protect.php");


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

<nav class="navbar navbar-dark bg-primary gradient-custom-navbar">
  <div class="container-md">
    <a href="../views/painel.php" class="navbar-brand bold">Welcome <?php echo($_SESSION["nome"]) ?> </a>
    <div>
    <a href="/NightmareFoxy1100000(Renan)/Expert/views/painel.php" class="btn btn-dark">Home</a>
      <a href="/NightmareFoxy1100000(Renan)/Expert/views/lista-usuario.php" class="btn btn-dark">Usuarios</a>
      <a href="/NightmareFoxy1100000(Renan)/Expert/views/lista-livro.php" class="btn btn-dark">Livros</a>
      <a class="btn btn-danger" href="../config/logout.php">Logout </a>
    </div>
  </div>
</nav>
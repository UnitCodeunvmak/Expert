<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="config/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>New User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

<section class="vh-100 gradient-custom">
    <?php include('nav-bar.php'); ?>
    <div class="container mt-5">
      <div class="row">
        <div class="card bg-dark text-white ">
          <div class="card-header">
            <h4>Cadastro de Usuario <a href="lista-usuario.php" class="btn btn-primary float-end">Voltar</a></h4>

          </div>
          <div class="card-body">
            <form action="../config/acoes.php" method="POST">
              <div class="mb-3">
                <label>Nome</label>
                <input type="text" name="nome" class="form-control">
              </div>
              <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control">
              </div>
              <div class="mb-3">
                <label>Senha</label>
                <input type="password" name="senha" class="form-control">
              </div>
              <div class="mb-3">
                <button class="btn btn-primary" type="submit" name="cadastra_usuario">Salvar</button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
</section>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
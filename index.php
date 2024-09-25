<?php
#requerimos um outro arquivo chamado login para executar conexoes com o banco de dados e enviar as credenciais escritas nos campos de foruns abaixo
include('./src/model/login.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="config/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LogIn</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Por favor insira seu email e senha!</p>

              <form action="" method="POST">
                <div data-mdb-input-init class="form-outline form-white mb-4">
                    <label class="fw-bold mb-2 text-uppercase" for="typeEmailX">Email</label>
                    <input class="form-control form-control-lg" type="email" name="email" placeholder="example@example.com"/> <!--aqui esta o input para o email -->
                </div>

                <div data-mdb-input-init class="form-outline form-white mb-4">
                    <label class="fw-bold mb-2 text-uppercase" for="typePasswordX" type="password" name="senha">Senha</label>
                    <input class="form-control form-control-lg" type="password" name="senha" placeholder="********"/> <!--aqui esta o input para a senha -->
                </div>

                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
            </form>

              <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Esqueceu sua senha?</a></p>

              <?php include("../Expert/views/mensagem.php") ?>

              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>

            </div>

            <div>
              <p class="mb-0">Não tem uma conta? <a href="#!" class="text-white-50 fw-bold">Criar Conta</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html> 
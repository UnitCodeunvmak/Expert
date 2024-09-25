<?php
#requerimos um outro arquivo chamado conexao para fazer a conexao com o banco de dados criamos um arquivo extra pois as funções do mesmo serão ultilizadas por outros arquivos
include ('./config/conexao.php');

#verificamos se o email e senha enviados atraves do metodo _POST existem
if(isset($_POST['email']) || isset($_POST['senha'])){

  #verificamos se as informações enviadas pelo metodo _POST["email"] não contem nenhum valor
  if(strlen($_POST['email']) == 0){
    #se as informações enviadas pelo metodo _POST["email"] não contem nenhum valor enviamos uma mensagem atraves do metodo _SESSION informando o usuario
    $_SESSION['mensagem'] = "Informe seu email" ;

    #se o metodo _POST["email"] 
  }else if(strlen($_POST['senha']) == 0){
    $_SESSION['mensagem'] = "Informe sua senha";
  }else{

    $mysqli = new Conn();

    $email = $mysqli->getConnection()->real_escape_string($_POST['email']);
    $senha =  $mysqli->getConnection()->real_escape_string($_POST['senha']);

    $sql = "SELECT * FROM user WHERE email = '$email'";
    $sql_query =  $mysqli->getConnection()->query($sql) or die;
    $qtd = $sql_query->num_rows;

    if($qtd == 1){
      $usuario = $sql_query->fetch_assoc();
      if(password_verify($senha, $usuario['senha'])){
      
      if(!isset($_SESSION)){
        session_start();
      }

      $_SESSION['id'] = $usuario['id'];
      $_SESSION['nome'] = $usuario['nome'];
      $_SESSION['aula'] = 'Aula legal!';

      header('Location: views/painel.php');
      
    }
    echo 'Email ou senha invalidos 1';
    }else{

      #se o email e a senha enviadas atraves do metodo _POST não existirem printamos uma mensagem
      echo "Email ou senha invalidos. 2";
    }

    #codigo que salvei pra printar o hash da senha a muitas aulas atras
      #echo(password_hash($senha, PASSWORD_BCRYPT));



  }


  

}
?>
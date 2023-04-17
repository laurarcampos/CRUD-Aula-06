<?php

if(!empty($_GET['idusuario'])){
  include_once('conexao.php');

  $idusuario = $_GET['idusuario'];

  $sql = "SELECT * FROM usuario WHERE idusuario=$idusuario";

  $resultado = $conexao->query($sql);

  if($resultado->num_rows > 0){

      while($dados = mysqli_fetch_assoc($resultado)){
      $nome = $dados['nome'];
      $email = $dados['email'];
      $senha = $dados['senha'];
      $data_nasc = $dados['data_nasc'];  
    }
  }else{
    header('Location:index.php');
  }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>CRUD</title>
</head>
<body>
    <div class="container">
      <a href="./index.php">Voltar ao menu inicial</a>
      <form action="./update.php" method="POST">
        <input type="hidden" name="idusuario" value="<?php echo $idusuario; ?>">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome:</label>
            <input type="text" class="form-control" name="nome" id="exampleFormControlInput1" placeholder="Insira seu nome" value="<?php echo $nome;?>">
          </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com" value="<?php echo $email;?>">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Senha:</label>
            <input type="password" class="form-control" name="senha" id="exampleFormControlInput1" placeholder="Insira uma senha" value="<?php echo $senha;?>">
          </div>
          <div class="mb-3">  
            <label for="exampleFormControlInput1" class="form-label">Data de nascimento</label>
            <input type="date" class="form-control" name="data_nasc" id="exampleFormControlInput1" value="<?php echo $data_nasc;?>">
          </div>
          <input type="submit" class="btn btn-primary" value="Salvar" name="update" id="update">
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
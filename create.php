<?php
include_once('conexao.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$data_nasc = $_POST['data_nasc'];

if (mysqli_connect_errno()) {
    echo "Erro ao conectar ao banco de dados: " . mysqli_connect_error();
} else {
    $result = mysqli_query($conexao,
    "INSERT INTO usuario(nome, email, senha, data_nasc)
    VALUES('$nome', '$email', '$senha', '$data_nasc')");

    if ($result) {
        if(mysqli_insert_id($conexao)){
            echo "Usuário cadastrado com sucesso!";
            header("Location: index.php");
        }
        else{
            echo "Erro ao cadastrar";
        }
    } else {
        echo "Erro ao executar a consulta: " . mysqli_error($conexao);
    }

    mysqli_close($conexao);
}
?>

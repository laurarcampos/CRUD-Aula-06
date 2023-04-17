<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idusuario = $_POST['idusuario'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $data_nasc = $_POST['data_nasc'];

    if (empty($nome) || empty($email) || empty($senha) || empty($data_nasc)) {
        echo "Por favor, preencha todos os campos.";
    } else {
        include_once("conexao.php");

        if (mysqli_connect_errno()) {
            echo "Erro ao conectar ao banco de dados: " . mysqli_connect_error();
        } else {
            $sql = "UPDATE usuario SET nome='$nome', email='$email', senha='$senha', data_nasc='$data_nasc'
            WHERE idusuario='$idusuario'";
            
            $resultado = mysqli_query($conexao, $sql);
            if ($resultado) {
                echo "Dados atualizados com sucesso!";
                header("Location: index.php");
            } else {
                echo "Erro ao atualizar os dados: " . mysqli_error($conexao);
            }
            mysqli_close($conexao);
        }
    }
}
?>

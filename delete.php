<?php
include_once("conexao.php");

$idusuario = filter_input(INPUT_GET, 'idusuario', FILTER_SANITIZE_NUMBER_INT);
if(!empty($idusuario)){
	$result_usuario = "DELETE FROM usuario WHERE idusuario='$idusuario'";
	$resultado_usuario = mysqli_query($conexao, $result_usuario);
	if(mysqli_affected_rows($conexao)){
		echo "Usuário deletado com sucesso";
		header("Location: index.php");
	}else{
		echo "Erro ao deletar usuário";
		header("Location: index.php");
	}
}else{	
	echo "Necessário selecionar um usuário";	
	header("Location: index.php");
}
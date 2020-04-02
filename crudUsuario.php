<?php
include 'conexaoBD.php';
	function cadastrarPessoa($email, $senha){
		conectar();
		query("INSERT INTO user (email, senha) VALUES ('$email', '$senha')");
		fechar();
	}
	function cadastrarLivro($autor,$livro,$editora){
		conectar();
		query("INSERT INTO livros (autor, livro, editora) VALUES ('$autor','$livro','$editora')");
		fechar();
	}

	function buscarUsuario($email){
		conectar();
		$resultado = query("SELECT * FROM user WHERE email='$email' ");
		fechar();
		return $resultado;
	}

?>
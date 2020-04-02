<?php
	$conexao;

	function conectar(){
		global $conexao;
		$conexao = mysqli_connect('localhost', 'root', '', 'trabalho1') or die (mysqli_connect_error());
	}

	function fechar(){
		global $conexao;
		mysqli_close($conexao);
	}

	function query($sql){//executar o sql
		global $conexao;
		$query = mysqli_query($conexao, $sql) or die (mysqli_query_error());
		return $query;
	}
?>
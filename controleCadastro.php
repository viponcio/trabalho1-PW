<?php
	include 'crudUsuario.php';

	$opcao=$_POST["opcao"];

	if($opcao=="Entrar"){
		$autor=$_POST["autor"];
		$livro=$_POST["livro"];
		$editora=$_POST["editora"];
		cadastrarLivro($autor,$livro,$editora);//função que vai para crud
		header("Location:cadastar.php");
	}

?>
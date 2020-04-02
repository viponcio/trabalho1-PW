<?php
	include 'crudUsuario.php';
		$opcao=$_POST["opcao"];

	if($opcao=="Cadastrar Usuário"){
		$email=$_POST["email"];
		$senha=sha1($_POST["senha"]);
		cadastrarPessoa($email, $senha);
		header("Location: paginaInicial.php");
	}

	elseif($opcao=="Ir Cadastro"){
		$email=$_POST["email"];
		$senha=sha1($_POST["senha"]);
		$emailBanco="null";
		$senhaBanco="null";
		$resultado=buscarUsuario($email);//buscar o email no banco

			while($linha=mysqli_fetch_assoc($resultado)){
				$emailBanco=$linha['email'];
				$senhaBanco=$linha['senha'];
			}
			if($email == $emailBanco){

				if($senha == $senhaBanco){
					session_start();
					$_SESSION['email']=$emailBanco;
					$_SESSION['senha']=$senhaBanco;
					header("Location: paginaInicial.php");
				}
				else{
					echo "<script>alert('Senha Incorreta!');</script>";
					echo "<script>window.location = 'login.php';</script>";
					}
 			}

 			else{
				echo "<script>alert('Email Incorreto!');</script>";
				echo "<script>window.location = 'login.php';</script>";
 			}
		}
?>
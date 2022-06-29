<?php
		
        include_once("pessoa.php");
        
		
		$nome = $_POST["TxtNome"];
		
		$telefone = $_POST["TxtTel"];
		$email = $_POST["TxtEmail"];
		$senha = $_POST["TxtSenha"];
		$cpf = $_POST["TxtCpf"];
		$sexo = $_POST["SelectSex"];
		if ($idusuario == 0) { // Novo cadastro
			inserePessoa($nome, $telefone, $email, $cpf, $sexo,$senha);
		} else { 	// Atualiza cadastro existente
			alteraPessoa($nome, $telefone, $email,$cpf,$sexo, $idusuario);
		}
		header("location:Pcarona.php");
 ?>

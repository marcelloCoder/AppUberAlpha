<?php
		
        include_once("veiculo.php");
        
		
		$nomeveiculo = $_POST[""];
        $tipoveiculo = $_POST[""];
        $placa = $_POST[""];
		
		
		if ($codveiculo == 0) { // Novo cadastro
			insereVeiculo($nomeveiculo, $tipoveiculo,  $placa);
		} else { 	// Atualiza cadastro existente
			alteraVeiculo($nomeveiculo, $tipoveiculo,  $placa, $codveiculo);
		}
		header("location:Pcarona.php");
 ?>

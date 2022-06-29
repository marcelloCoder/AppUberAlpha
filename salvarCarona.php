<?php
		
        include_once("carona.php");
        
		
		$itinerario = $_POST["Txtiti"];
        $observacao = $_POST["Txtobs"];
        $partida = $_POST["Txtptd"];
        $vagas = $_POST["Txtvagas"];
        $valor = $_POST["Txtvalor"];
		
		
		if ($codcarona == 0) { // Novo cadastro
			insereCarona($itinerario, $observacao,  $partida, $vagas,  $valor);
		} else { 	// Atualiza cadastro existente
			alteraCarona($itinerario, $observacao,  $partida,$vagas, $valor, $codcarona);
		}
		header("location:Pcarona.php");
 ?>

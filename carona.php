<?php 

include_once("conecta.php"); // Inclui a classe conecta


function validaCarona($inti, $valor) {
    $sql = "SELECT * FROM carona WHERE  itinerario_carona = '".$inti."' AND valor_carona = '".$valor."';";
    $conexao = abreConexao(); // Abre a conexão com o BD
    $resultado = $conexao->query($sql);
    $conexao->close(); // Fecha a conexão com o BD
    if (mysqli_num_rows($resultado) > 0) {
         $carona = mysqli_fetch_array($resultado);
         return $carona;
    } else {
         return null;
    } 
}
function retornaCarona() {
	$sql = "SELECT * FROM carona ORDER BY itinerario_carona";
	$conexao = abreConexao(); # Abre a conexão com o BD
	$resultado = $conexao->query($sql);
	$conexao->close(); // Fecha a conexão com o BD
	if (mysqli_num_rows($resultado) > 0) {
		 while ($row = mysqli_fetch_array($resultado)) {
			  $caronas[] = $row;
		 }
		 return $caronas;
	} else {
		 return null;
	} }

    function retornaCaronaPorCod($cod) {
        $sql = "SELECT * FROM carona WHERE cod_carona = ".$cod;
        $conexao = abreConexao(); // Abre a conexão com o BD
        $resultado = $conexao->query($sql);
        $conexao->close(); // Fecha a conexão com o BD
        if (mysqli_num_rows($resultado) > 0) {
             $Carona = mysqli_fetch_array($resultado);
             return $carona;
        } else {
             return null;
        } 
    }

    function insereCarona($itinerario, $observacao, $partida, $vagas,$valor) {
        echo "Aqui insere";
        // Define o comando SQL  (insert)
        $sql = "INSERT INTO carona(itinerario_carona, observacao_carona, partida_carona,vagas_carona, valor_carona) 
            VALUES('$itinerario', '$observacao', '$partida', '$vagas', $valor)";
        $conexao = abreConexao(); // Abre a conexão com o BD
        $conexao->query($sql); // Executa o comando SQL
        $conexao->close(); 	// Fecha a conexão com o BD
    }

    function alteraCarona($itinerario, $observacao, $partida, $vagas,$sexo,$valor, $cod) {
        // Define o comando SQL  (update)
        $sql = "UPDATE carona SET itinerario_carona = '$itinerario', 
            observacao_carona = '$observacao', partida_carona = '$partida', vagas_carona = '$vagas', sexo_carona = '$sexo',enha_carona=' $valor' WHERE cod_carona = $cod"; 
        $conexao = abreConexao(); // Abre a conexão com o BD
        $conexao->query($sql);	 // Executa o comando SQL
        $conexao->close(); // Fecha a conexão com o BD
    }

    function excluiCarona($cod) {
        // Define o comando SQL  (delete)
        $sql = "DELETE FROM carona WHERE cod_carona = $cod"; 
        $conexao = abreConexao(); // Abre a conexão com o BD
        $conexao->query($sql); // Executa o comando SQL
        $conexao->close(); // Fecha a conexão com o BD 
    }
    ?>
    
<?php 

include_once("conecta.php"); // Inclui a classe conecta


function validaVeiculo($nomeveiculo, $tipoveiculo) {
    $sql = "SELECT * FROM veiculo WHERE  nome_veiculo = '".$nomeveiculo."' AND tipo_veiculo = '".$tipoveiculo."';";
    $conexao = abreConexao(); // Abre a conexão com o BD
    $resultado = $conexao->query($sql);
    $conexao->close(); // Fecha a conexão com o BD
    if (mysqli_num_rows($resultado) > 0) {
         $veiculo = mysqli_fetch_array($resultado);
         return $veiculo;
    } else {
         return null;
    } 
}
function retornaVeiculo() {
	$sql = "SELECT * FROM veiculo ORDER BY nome_veiculo";
	$conexao = abreConexao(); # Abre a conexão com o BD
	$resultado = $conexao->query($sql);
	$conexao->close(); // Fecha a conexão com o BD
	if (mysqli_num_rows($resultado) > 0) {
		 while ($row = mysqli_fetch_array($resultado)) {
			  $veiculos[] = $row;
		 }
		 return $veiculos;
	} else {
		 return null;
	} }

    function retornaVeiculoPorCod($cod) {
        $sql = "SELECT * FROM veiculo WHERE cod_veiculo = ".$cod;
        $conexao = abreConexao(); // Abre a conexão com o BD
        $resultado = $conexao->query($sql);
        $conexao->close(); // Fecha a conexão com o BD
        if (mysqli_num_rows($resultado) > 0) {
             $veiculo = mysqli_fetch_array($resultado);
             return $veiculo;
        } else {
             return null;
        } 
    }

    function insereVeiculo($nomeveiculo, $tipoveiculo, $placa) {
        echo "Aqui insere";
        // Define o comando SQL  (insert)
        $sql = "INSERT INTO Veiculo(nome_veiculo, tipo_veiculo, placa_veiculo) 
            VALUES('$nomeveiculo', '$tipoveiculo', '$placa')";
        $conexao = abreConexao(); // Abre a conexão com o BD
        $conexao->query($sql); // Executa o comando SQL
        $conexao->close(); 	// Fecha a conexão com o BD
    }

    function alteraVeiculo($nomeveiculo, $tipoveiculo, $placa, $tipoveiculo, $cod) {
        // Define o comando SQL  (update)
        $sql = "UPDATE veiculo SET nome_veiculo = '$nomeveiculo', 
            tipo_veiculo = '$tipoveiculo', partida_veiculo = '$placa' WHERE cod_veiculo = $cod"; 
        $conexao = abreConexao(); // Abre a conexão com o BD
        $conexao->query($sql);	 // Executa o comando SQL
        $conexao->close(); // Fecha a conexão com o BD
    }

    function excluiVeiculo($cod) {
        // Define o comando SQL  (delete)
        $sql = "DELETE FROM veiculo WHERE cod_veiculo = $cod"; 
        $conexao = abreConexao(); // Abre a conexão com o BD
        $conexao->query($sql); // Executa o comando SQL
        $conexao->close(); // Fecha a conexão com o BD 
    }
    ?>
    
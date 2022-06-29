<?php 

include_once("conecta.php"); // Inclui a classe conecta


function validaUsuario($user, $senha) {
    $sql = "SELECT * FROM usuario WHERE  nome_usuario = '".$user."' AND senha_usuario = '".$senha."';";
    $conexao = abreConexao(); // Abre a conexão com o BD
    $resultado = $conexao->query($sql);
    $conexao->close(); // Fecha a conexão com o BD
    if (mysqli_num_rows($resultado) > 0) {
         $pessoa = mysqli_fetch_array($resultado);
         return $pessoa;
    } else {
         return null;
    } 
}
function retornaPessoas() {
	$sql = "SELECT * FROM usuario ORDER BY nome_usuario";
	$conexao = abreConexao(); # Abre a conexão com o BD
	$resultado = $conexao->query($sql);
	$conexao->close(); // Fecha a conexão com o BD
	if (mysqli_num_rows($resultado) > 0) {
		 while ($row = mysqli_fetch_array($resultado)) {
			  $pessoas[] = $row;
		 }
		 return $pessoas;
	} else {
		 return null;
	} }

    function retornaPessoaPorId($id) {
        $sql = "SELECT * FROM usuario WHERE cod_usuario = ".$id;
        $conexao = abreConexao(); // Abre a conexão com o BD
        $resultado = $conexao->query($sql);
        $conexao->close(); // Fecha a conexão com o BD
        if (mysqli_num_rows($resultado) > 0) {
             $pessoa = mysqli_fetch_array($resultado);
             return $pessoa;
        } else {
             return null;
        } 
    }

    function inserePessoa($nome, $telefone, $email,$cpf,$sexo,$senha) {
        echo "Aqui insere";
        // Define o comando SQL  (insert)
        $sql = "INSERT INTO usuario(nome_usuario, telefone_usuario, email_usuario,cpf_usuario, sexo_usuario,senha_usuario) 
            VALUES('$nome', '$telefone', '$email', '$cpf', '$sexo',$senha)";
        $conexao = abreConexao(); // Abre a conexão com o BD
        $conexao->query($sql); // Executa o comando SQL
        $conexao->close(); 	// Fecha a conexão com o BD
    }

    function alteraPessoa($nome, $telefone, $email,$cpf,$sexo,$senha, $id) {
        // Define o comando SQL  (update)
        $sql = "UPDATE usuario SET nome_usuario = '$nome', 
            telefone_usuario = '$telefone', email_usuario = '$email', cpf_usuario = '$email', sexo_usuario = '$sexo',enha_usuario=' $senha' WHERE cod_usuario = $id"; 
        $conexao = abreConexao(); // Abre a conexão com o BD
        $conexao->query($sql);	 // Executa o comando SQL
        $conexao->close(); // Fecha a conexão com o BD
    }

    function excluiPessoa($id) {
        // Define o comando SQL  (delete)
        $sql = "DELETE FROM usuario WHERE cod_usuario = $id"; 
        $conexao = abreConexao(); // Abre a conexão com o BD
        $conexao->query($sql); // Executa o comando SQL
        $conexao->close(); // Fecha a conexão com o BD 
    }
    ?>
    
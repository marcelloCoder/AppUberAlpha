<?php

    function abreConexao() {
        $servername = "localhost";
        $database = "bancodadosuberalpha";
        $username = "root";
        $password = "";
        
        $conn = mysqli_connect($servername, $username, $password, $database);
        // Check connection
        if (!$conn) {
            die("Falha na conexão: " . mysqli_connect_error());
        } 
		return $conn;
	}
?>
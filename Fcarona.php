<?php # Verifica se foi enviado algum ID
	if (!isset($_GET["cod"])) { // Novo registro carona
		$codecarona = 0;
		$titulo = "Cadastro de uma nova carona";
    $itinerario = $observacao = $partida =$vagas= $valor="";
	} else { // Alteração de registro
		$codcarona = $_GET["cod"]; 
		include_once("carona.php");
		$carona = retornaCaronaPorCod($codcarona);
		if ($carona != null) { // Verifica se retornou um registro
            $titulo = "Atualização dos dados da carona";
            $itinerario = $carona["itinerario_carona"];
            $observacao = $carona["observacao_carona"];
            $partida = $carona["partida_carona"];
            $vagas = $carona["vagas_carona"];
            $valor = $carona["valor_carona"];       

          }
      }
	 
    
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="headers.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/styleindex.css" rel="stylesheet">
    <script src="scripts/redirecionar.js" defer></script>
    <script src="scripts/cadUser.js" ></script>
    <script src="scripts/logUser.js" ></script>
    <title>Pagina inicial</title>
</head>
<body>

    


    <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="index.html" class="nav-link px-2 text-secondary">Home</a></li>
              <li><a href="Fcarona.php" class="nav-link px-2 text-white">Fazer carona</a></li>
              <li><a href="Pcarona.php" class="nav-link px-2 text-white">Pedir carona</a></li>
              <li><a href="VisualizarVeiculo.php" class="nav-link px-2 text-white">Veiculo</a></li>
              <li><a href="paginaMapa.php" class="nav-link px-2 text-white">Localizar no Mapa</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-white bg-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2" id="loginA" value="" onclick="loginA()">Login</button>
          <button type="button" class="btn btn-warning" id="signA" value="signA" onclick="signA()">Sign-up</button>          
        </div>
      </div>
    </div>
  </header>
    <main>
        <header class="p-3 bg-dark text-white">
            <button type="button" class="btn btn-warning" id="Fcar">Fazer Carona</button>
            <button type="button" class="btn btn-warning" id="Pcar">Procurar Carona</button>
            <button type="button" class="btn btn-warning" id="Pcar">Cadastrar Veiculo</button>
        </header>
        
            <form class="row g-3 needs-validation boxM" action="salvarCarona.php" method="POST">
            <input type="hidden" name="cod" 
									value="<?php echo($codecarona); ?>"/>
                <input type = "text" class="form-control" name="TxtVeiculo" placeholder="Veiculo" id="tpVeiculo">
                <br>
                <br>
                <input type = "text" class="form-control" name="Txtvalor" placeholder="Valor" id="tpValor"value=<?php echo($valor); ?>>
                
                <br>
                <input type = "text" class="form-control" name="Txtvagas" placeholder="Vagas" id="tpVagas"value=<?php echo($vagas); ?>>
                
                <br>
                <input type = "text" class="form-control" name="Txtiti" placeholder="Iternario" id="tpIternario"valu=<?php echo($itinerario); ?>>
                
                <br>
                <input type = "text" class="form-control" name="Txtptd" placeholder="Partida" id="tpPartida" value=<?php echo($partida); ?>>
               
                <br>
                <input type = "text" class="form-control" name="Txtobs" placeholder="Observacao" id="tpObservacao" value=<?php echo($observacao); ?>>
               
                <br>
                <input type = "submit" class="btn btn-primary" placeholder="Solicitar" id="tpSoli">
            
          
            </form>
          
    </main>

    
</body>
</html>
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
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="index.html" class="nav-link px-2 text-secondary">Home</a></li>
              <li><a href="Fcarona.php" class="nav-link px-2 text-white">Fazer carona</a></li>
              <li><a href="Pcarona.php" class="nav-link px-2 text-white">Pedir carona</a></li>
              <li><a href="VisualizarVeiculo.php" class="nav-link px-2 text-white">Veiculo</a></li>
        </ul>

        

        <div class="col-md-3 text-end">
          <button type="button" class="btn btn-outline-light me-2" id="loginA" value="" onclick="loginA()">Login</button>
          <button type="button" class="btn btn-warning" id="signA" value="signA" onclick="signA()">Sign-up</button>         
        </div>
      </div>
    </div>
  </header>
  
  
    <main>
    <table class="table">
	  <?php include_once("veiculo.php");
    $codmt= 1;
		$vetveiculo = retornaVeiculo($codmt);
		if ($vetveiculo != null) {
            foreach ($vetveiculo as $veiculo) {
                $nome = $veiculo['nome_veiculo'];
                $placa = $veiculo['placa_veiculo'];
                $tipveiculo = $veiculo['tipo_veiculo'];
                $codveiculo = $veiculo['cod_veiculo'];
     echo('<tr> <td>'.$nome.'</td> <td>'.$placa.'</td>
    <td>'.$tipoveiculo.'</td> <td><a href="formulario.php?id='.$codveiculo.
    '" class="btn btn-primary">Alterar</a><a href="excluir.php?id='. $codveiculo.'" class="btn btn-danger" onclick="return confirm(\'Deseja excluir?\');">Excluir</a></td> </tr>');
            } // fecha foreach
        } // fecha if
        else {
            echo("<h1>Seu veiculo não foi cadastrado</h1>");
            
        }
        ?>
        </table>
        <div class="centralizar">
    
        <button  style="text-align:center" type="button" class="btn btn-warning" id="Ccar" >Cadastrar Veiculo</button>
        </div>

    </main>

    
</body>
</html>
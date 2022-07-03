<?php
  // session_start inicia a sessão
  session_start();
$logado = 0 ;
if((!isset($_SESSION['nomeSession'])) AND (!isset($_SESSION['senhaSession']))){
  header("Location:login.php");
  $logado = 1 ;
  exit;
}
?>

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
    <script src="scripts/validar.js" ></script>
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
            <button type="button" class="btn btn-warning" id="utp" onclick="utp()">Cadastrar Veiculo</button>
        </header>
        <form  method="POST">
          <p>
            <input type="text" name="address" placeholder="Seu Endereço">
          </p>
            <input type="submit" name="submit_address">
        </form>
        <form method="POST">
          <p>
           <input type="text" name="latitude" placeholder="Sua latitude">
          </p>
          <p>
            <input type="text" name="longitude" placeholder="Sua longitude">
          </p>
            <input type="submit" name="submit_coordinates">
        </form>
            
          
          
          
    
<?php
    if (isset($_POST["submit_address"]))
    {
        $address = $_POST["address"];
        $address = str_replace(" ", "+", $address);
        ?>
 
        <iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $address; ?>&output=embed"></iframe>
 
        <?php
    }

    if (isset($_POST["submit_coordinates"]))
    {
        $latitude = $_POST["latitude"];
        $longitude = $_POST["longitude"];
        ?>
 
        <iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $latitude; ?>,<?php echo $longitude; ?>&output=embed"></iframe>
 
        <?php
    }
?>
</main>

    
</body>
</html>
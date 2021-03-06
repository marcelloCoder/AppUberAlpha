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
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="index.html" class="nav-link px-2 text-secondary">Home</a></li>
              <li><a href="Fcarona.php" class="nav-link px-2 text-white">Fazer carona</a></li>
              <li><a href="Pcarona.php" class="nav-link px-2 text-white">Pedir carona</a></li>
              <li><a href="Visualizarcarona.php" class="nav-link px-2 text-white">Veiculo</a></li>
              <li><a href="paginaMapa.php" class="nav-link px-2 text-white">Localizar no Mapa</a></li>
        </ul>

        

        <div class="col-md-3 text-end">
          <?php
          if($logado == 1){
         ?>
          <button type="button" class="btn btn-outline-light me-2" id="loginA" value="" onclick="loginA()">Deslogar</button>
          <?php
          }else{
          ?>
          <button type="button" class="btn btn-outline-light me-2" id="loginA" value="" onclick="loginA()">Login</button>
          <button type="button" class="btn btn-warning" id="signA" value="signA" onclick="signA()">Sign-up</button>      
          <?php } ?>    
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
        <table class="table">
        <?php include_once("carona.php");
        $codmt= 1;
        $vetcarona = retornaCarona();
        if ($vetcarona != null) {
                foreach ($vetcarona as $carona) {
                    $volor = $carona['valor_carona'];
                    $partida = $carona['partida_carona'];
                    $vaga = $carona['vagas_carona'];
                    $itinerario = $carona['itinerario_carona'];
                    $obv = $carona['observacao_carona'];
                    $codcarona = $carona['cod_carona'];
        echo('<tr> <td>'.$valor.'</td> <td>'.$partida.'</td>
        <td>'.$itinerario.'</td> <td>'.$obv.'</td> <td><a href="formulario.php?id='.$codcarona.
        '" class="btn btn-primary">Alterar</a><a href="excluir.php?id='. $codcarona.'" class="btn btn-danger" onclick="return confirm(\'Deseja excluir?\');">Excluir</a></td> </tr>');
                } // fecha foreach
            } // fecha if
            else {
                echo("<h1>Nenhuma carona a vista</h1>");
                
            }
            ?>
            </table>
            <div class="centralizar">
        
            <button  style="text-align:center" type="button" class="btn btn-warning" id="Pcar" >Cadastrar carona</button>
            </div>

    </main>

    
</body>
</html>
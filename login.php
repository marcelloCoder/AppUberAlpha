
<?php # Verifica se foi enviado algum ID
	if (!isset($_GET["id"])) { // Novo registro pessoa
		$idUsuario = 0;
		$titulo = "Cadastro de uma nova pessoa";
    $nome = $telefone = $email =$cpf= $sexo= $senha="";
	} else { // Alteração de registro
		$idpessoa = $_GET["id"]; 
		include_once("pessoa.php");
		$pessoa = retornaPessoaPorId($idpessoa);
		if ($pessoa != null) { // Verifica se retornou um registro
            $titulo = "Atualização dos dados da pessoa";
            $nome = $pessoa["nome_usuiario"];
              $telefone = $pessoa["telefone_usuario"];
              $email = $pessoa["email_usuario"];
			  $cpf = $pessoa["cpf_usuario"];
        $senha = $pessoa["senha_usuario"];
			  $sexo = $pessoa["sexo_usuario"];


          }
      }
	 
    
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylecadastro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="scripts/redirecionar.js" defer></script>
    <script src="scripts/cadUser.js" ></script>
    <script src="scripts/logUser.js" ></script>
    <title>Login</title>
</head>
<body style=" background-color: rgb(66, 54, 54)">
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
        </ul>
        </ul>

      

        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2" id="loginA" value="" onclick="loginA()">Login</button>
          <button type="button" class="btn btn-warning" id="signA" value="signA" onclick="signA()">Sign-up</button>                       
        </div>
      </div>
    </div>
  </header>
    <form class="box" action="autenticaLogin.php" method="POST">
        
        <h1>Login</h1>
        <label class="txtUser"for="LNome">Nome Completo:</label>
        <input type="text" class="text-input" name="LNome" id="NComp" placeholder="Nome" requidred>
        <?php echo($nome); ?>
        <br>
        
        <br>
        <label class="txtUser" for="LSenha">Senha</label>
        <input type="password" class="text-input" name="LSenha" id="Senha" placeholder="Senha" requidred>
        <?php echo($senha); ?>
        
        <input  class="btn" type="submit" id="cad"  placeholder="LOGIN" value="Login">
      
    </form>
   


    
    
</body>
</html>
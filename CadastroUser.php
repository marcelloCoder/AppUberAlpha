<?php
function get_endereco($cep){


// formatar o cep removendo caracteres não numericos
$cep = preg_replace("/[^0-9]/", "", $cep);
$url = "http://viacep.com.br/ws/$cep/xml/";

$xml = simplexml_load_file($url);
return $xml;
}

?>
<?php # Verifica se foi enviado algum ID
	if (!isset($_GET["id"])) { // Novo registro pessoa
		$idusuario = 0;
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
    <link rel="stylesheet" href="css/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="scripts/redirecionar.js" defer></script>
    <script src="scripts/cadUser.js" ></script>
    <script src="scripts/logUser.js" ></script>
    <title>Document</title>
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
        </ul>
        

      

        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2" id="loginA" value="" onclick="loginA()">Login</button>
          <button type="button" class="btn btn-warning" id="signA" value="signA" onclick="signA()">Sign-up</button>                       
        </div>
      </div>
    </div>
  </header>
  <main>
    <form class="box" action="salvar.php" method="POST">
        <h1>Cadastro</h1>
        <input type="hidden" name="id" 
									value="<?php echo($idusuario); ?>"/>
        <label class="txtUser"for="TxtNome">Nome Completo:</label>
        <input type="text" class="text-input" name="TxtNome" id="NComp" placeholder="Nome" requidred>
        value="<?php echo($nome); ?>"/>
        <br>
        <label class="txtUser" for="TxtEmail">E-mail:</label>
        <input type="email" class="text-input" name="TxtEmail" id="NEmail" placeholder="E-mail" requidred>
        value="<?php echo($email); ?>"/>
        <br>
        <label class="txtUser" for="SelectSex">Sexo:</label><br>
        <select class="text-input" name="SelectSex" id="NSexo">
          <option value="">Selecione</option>
          <option value="F">Feminino</option>
          <option value="M">Masculino</option>
        </select>
        value="<?php echo($sexo); ?>"/>
        <br><br>
        <label class="txtUser" for="TxtTel">Telefone:</label>
        <input type="text" class="text-input" name="TxtTel" id="NTel" placeholder="Telefone" maxlength="11" requidred>
        value="<?php echo($telefone); ?>"/>
        <br>
        <label class="txtUser" for="TxtCpf">CPF:</label>
        <input type="text" class="text-input" name="TxtCpf" id="NCpf" placeholder="Cpf" maxlength="11" requidred>
        value="<?php echo($cpf); ?>"/>
        <br>
        <label class="txtUser" for="TxtSenha">Senha</label>
        <input type="password" class="text-input" name="TxtSenha" id="Senha" placeholder="Senha" requidred>
        value="<?php echo($senha); ?>"/>
        <br>
        <label class="txtUser" for="TxtCofirmar">Confirmar Senha</label>
        <input type="password" class="text-input" name="TxtCSenha" id="CSenha" placeholder="Confirmar Senha" requidred>
        <br>
        <input  type="submit" id="cad"  placeholder="Cadastrar" value="Cadastrar">
        <!--<label for="cep">Cep</label>
        <input type="text" name="cep" id="cep">
        <input type="submit" value="Pesquisar"> -->
    </form>
  </main> 

<?php /*if($_POST['cep']){ ?>
<h2>Resultado da Pesquisa</h2>
<p>
  <?php $endereco = get_endereco("37500405"); ?>
  <b>CEP: </b> <?php echo $endereco->cep; ?><br>
  <b>Logradouro: </b> <?php echo $endereco->logradouro; ?><br>
  <b>Bairro: </b> <?php echo $endereco->bairro; ?><br>
  <b>Localidade: </b> <?php echo $endereco->localidade; ?><br>
  <b>UF: </b> <?php echo $endereco->uf; ?><br>
</p>
<?php } */ ?>

    
    
</body>
</html>
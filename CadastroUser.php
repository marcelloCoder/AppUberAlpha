<?php
function get_endereco($cep){


// formatar o cep removendo caracteres não numericos
$cep = preg_replace("/[^0-9]/", "", $cep);
$url = "http://viacep.com.br/ws/$cep/xml/";

$xml = simplexml_load_file($url);
return $xml;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylecadastro.css">
    <title>Document</title>
</head>
<body>
    <form class="box" action="" method="POST">
    <h1>Cadastro</h1>
    <label class="txtUser"for="TxtUser">Nome Usuario:</label>
    <input type="text" class="text-input" name="TxtUser" id="NUser" placeholder="Nome">
    <br>
    <label class="txtUser" for="TxtEmail">Email:</label>
    <input type="email" class="text-input" name="TxtEmail" id="NEmail" placeholder="Email">
    <br>
    <label class="txtUser" for="TxtSenha">Senha</label>
    <input type="password" class="text-input" name="TxtSenha" id="senha" placeholder="Senha">
    <br>
    <label class="txtUser" for="TxtCofirmar">Confirmar Senha</label>
    <input type="password" class="text-input" name="TxtCSenha" id="Csenha" placeholder="ConfirmarSenha">
    <br>
    <!--<label for="cep">Cep</label>
    <input type="text" name="cep" id="cep">
    <input type="submit" value="Pesquisar"> -->
    </form>
   

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
<?php
function get_endereco($cep){


// formatar o cep removendo caracteres nao numericos
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
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <h1>Cadastro</h1>
    <label for="TxtUser">Nome Usuario:</label>
    <input type="text" name="TxtUser" id="NUser" placehouder="Nome">
    <br>
    <label for="TxtEmail">Email:</label>
    <input type="email" name="TxtEmail" id="NEmail" placehouder="Email">
    <br>
    <label for="TxtSenha">Senha</label>
    <input type="password" name="TxtSenha" id="senha" placehouder="Senha">
    <br>
    <label for="TxtCofirmar">Confirmar Senha</label>
    <input type="password" name="TxtCSenha" id="Csenha" placehouder="ConfirmarSenha">
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
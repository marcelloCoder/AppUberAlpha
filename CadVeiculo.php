<?php
// session_start inicia a sessão
session_start();

session_start();
$logado = 0 ;
if((!isset($_SESSION['nomeSession'])) AND (!isset($_SESSION['senhaSession']))){
  header("Location:login.php");
  $logado = 1 ;
  exit;
}
?>
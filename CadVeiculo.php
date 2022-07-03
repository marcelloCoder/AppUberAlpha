<?php
// session_start inicia a sessão
session_start();

if(!isset($_SESSION['nomeSession']) and !isset($_SESSION['senhaSession'])){
  header("Location:login.php"); 

?>
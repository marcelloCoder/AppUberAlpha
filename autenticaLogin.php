<?php
    session_start();   
    include_once("pessoa.php");

    $user = $_POST["LNome"];
    $pass = $_POST["LSenha"];

    $logins = validaUsuario($user, $pass);

    if($logins == null){ 
        

    
    $_SESSION['nomeSession'] = $user;
    $_SESSION['senhaSession'] = $pass;
    header("Location:login.php");
       
    }else    
    header("Location:index.html");
       
   
   

?>
<?php
    session_start();   
    include_once("pessoa.php");

    $user = $_POST["TxtNome"];
    $pass = $_POST["TxtSenha"];

    $logins = validaUsuario($user, $pass);

    if($logins == null){ 
        $_SESSION['login'] = false; ?>
    
        <meta http-equiv="refresh" content="0; URL='index.html?mensagem=ui'"/>
    <?php }else{  
        $_SESSION['login'] = true;
    ?>
        <meta http-equiv="refresh" content="0; URL='index.html'"/>
    <?php    }
    exit(1);  

?>
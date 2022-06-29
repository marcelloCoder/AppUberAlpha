<?php
    include_once("../modelo/usuario.php");
    include_once("../dao/usuariodao.php");
   

    class UsuarioCont{
        private $usuario;
        private $dao;
      

        function __construct(){
            $this->usuario = new Usuario();
            $this->dao = new UsuarioDAO();
          
        }

        function determinarAcao($acao){
            if($acao == "inserir")
                $this->inserir();
            else if($acao == "alterar")
                $this->alterar();
            else if ($acao == "excluir")
                $this->excluir();
            else if ($acao == "logar")
                $this->logar();
        }

        function logar(){
         
        }

        function inserir(){
           $cod_usuario = -1;
           $resultado = $this->usuariodao->pegarPorCpf($_POST["cpf_usuario"]);
           if( sizeof($resultado) == 0 ){
                $this->usuario->setNomeusuario($_POST["nome_usuario"]);
                $this->usuario->setCpfusuario($_POST["cpf_usuario"]);

                $cod_usuario = $this->usuariodao->inserir($this->usuario);
           }else{
               $cod_usuario = $resultado[0]["cod_usuario"];
           }

           $this->usuario->setEmailusuario($_POST["email_usuario"]);
           $this->usuario->setSenhausuario( md5($_POST["senha_usuario"]) );
           $this->usuario->setCodusuario($cod_usuario);

           $this->dao->inserir($this->usuario);

           header("location: ../index.html");
        }

        function alterar(){

        }

        function excluir(){

        }
    }

    $controle = new UsuarioCont();
    $controle->determinarAcao($_POST["acao"]);
?>
<?php
    include_once("../util/conexao.php");

    class UsuarioDAO{

        public function inserir($usuario){
            $stmt = Conexao::getConexao()->prepare("insert into usuario (email_usuario, nome_usuario, senha_usuario, sexo_usuario, telefone_usuario) values (:email_usuario, :nome_usuario, :senha_usuario, :sexo_usuario, :telefone_usuario)");
            $stmt->bindValue(":nome_usuario" , $usuario->getNomeusuario());
            $stmt->bindValue(":email_usuario" , $usuario->getEmailusuario());
            $stmt->bindValue(":senha_usuario" , $usuario->getSenhausuario());
            $stmt->bindValue(":sexo_usuario" , $usuario->getSexousuario());
            $stmt->bindValue(":telefone_usuario" , $usuario->getTelefoneusuario());
            $stmt->bindValue(":cpf_usuario" , $usuario->getCpfusuario());
            $stmt->execute();

            return Conexao::getConexao()->lastInsertId();
            
        }

        public function alterar($usuario){
            $stmt = Conexao::getConexao()->prepare("update usuario set email_usuario = :email_usuario, senha_usuario = :senha_usuario where cod_usuario = :cod_usuario");
            $stmt->bindValue(":email_usuario" , $usuario->getEmailusuario());
            $stmt->bindValue(":senha_usuario" , $usuario->getSenhausuario());
            $stmt->bindValue(":cod_usuario" , $usuario->getCodusuario());
            $stmt->execute();
        }

        public function excluir($usuario){
            $stmt = Conexao::getConexao()->prepare("delete from usuario where cod_usuario = :cod_usuario");
            $stmt->bindValue(":cod_usuario" , $usuario->getCodusuario());
            $stmt->execute();
        }

        public function pegarTodos(){
            $stmt = Conexao::getConexao()->prepare("select * from usuario order by email_usuario");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function pegarPorId($cod_usuario){
            $stmt = Conexao::getConexao()->prepare("select * from usuario where cod_usuario = :cod_usuario");
            $stmt->bindValue(":cod_usuario" , $cod_usuario);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function efetuarEmailusuario($usuario){
            $stmt = Conexao::getConexao()->prepare("select * from usuario where email_usuario = :email_usuario and senha_usuario = :senha_usuario");
            $stmt->bindValue(":email_usuario" , $usuario->getEmailusuario());
            $stmt->bindValue(":senha_usuario" , $usuario->getSenhausuario());
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }


    }

?>
<?php
    class Usuario{
        private $cod_usuario;
        private $nome_usuario;
        private $sexo_usuario;
        private $email_usuario;
        private $telefone_usuario;
        private $cpf_usuario;
        private $senha_usuario;

        public function getCodusuario(){
            return $this->cod_usuario;
        }

        public function setCodusuario($cod_usuario){
            $this->cod_usuario = $cod_usuario;
        }
        
        public function getNomeusuario(){
            return $this->nome_usuario;
        }

        public function setNomeusuario($nome_usuario){
            $this->nome_usuario = $nome_usuario;
        }

        public function getSexousuario(){
            return $this->sexo_usuario;
        }

        public function setSexousuario($sexo_usuario){
            $this->sexo_usuario = $sexo_usuario;
        }

        public function getEmailusuario(){
            return $this->email_usuario;
        }

        public function setEmailusuario($email_usuario){
            $this->email_usuario = $email_usuario;
        }

        public function getTelefoneusuario(){
            return $this->telefone_usuario;
        }

        public function setTelefoneusuario($telefone_usuario){
            $this->telefone_usuario = $telefone_usuario;
        }
        
        public function getCpfusuario(){
            return $this->cpf_usuario;
        }

        public function setCpfusuario($cpf_usuario){
            $this->cpf_usuario = $cpf_usuario;
        }

        public function getSenhausuario(){
            return $this->senha_usuario;
        }

        public function setSenhausuario($senha_usuario){
            $this->sexo_usuario = $senha_usuario;
        }


    }





?>
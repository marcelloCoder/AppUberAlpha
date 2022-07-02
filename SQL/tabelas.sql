CREATE TABLE usuario(
    cod_usuario integer PRIMARY KEY AUTO_INCREMENT,
    nome_usuario varchar(45) NOT NULL,
    sexo_usuario char(1) NOT NULL,
    email_usuario varchar(45) NOT NULL,
    telefone_usuario varchar(11) NOT NULL,
    cpf_usuario varchar(11) UNIQUE NOT NULL,
    senha_usuario varchar(45) NOT NULL
);


CREATE TABLE veiculo(
    cod_veiculo integer PRIMARY KEY AUTO_INCREMENT,
    tipo_veiculo varchar(20) NOT NULL,
    placa_veiculo varchar(7) UNIQUE NOT NULL,
    nome_veiculo varchar(45) NOT NULL,
    cod_motorista_veiculo integer NOT NULL,
    FOREIGN KEY (cod_motorista_veiculo) REFERENCES usuario(cod_usuario) 
    ON DELETE CASCADE
    ON UPDATE CASCADE
);


CREATE TABLE carona(
    cod_carona integer PRIMARY KEY AUTO_INCREMENT,
    valor_carona float NOT NULL,
    partida_carona datetime NOT NULL,
    vagas_carona integer NOT NULL,
    itinerario_carona text(5000) NOT NULL,
    observacao_carona text(5000),
    cod_veiculo_carona integer NOT NULL,
    FOREIGN KEY (cod_veiculo_carona) REFERENCES veiculo(cod_veiculo) 
    ON DELETE CASCADE
    ON UPDATE CASCADE
);


CREATE TABLE usuario_carona(
    observacao_usuario text(5000),
    cod_usuario integer NOT NULL,
    cod_carona integer NOT NULL,
    FOREIGN KEY (cod_usuario) REFERENCES usuario(cod_usuario) 
    ON DELETE CASCADE
    ON UPDATE CASCADE,
    FOREIGN KEY (cod_carona) REFERENCES carona(cod_carona)
    ON DELETE CASCADE
    ON UPDATE CASCADE
);
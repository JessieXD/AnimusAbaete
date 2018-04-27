-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.



CREATE TABLE USER(
cod_user smallint,
região varchar(20),
senha int,
email varchar(50),
nome varchar(60),
perfil varchar(60),
cnpj int,
nome_responsavel varchar(60),
end_sede varchar(100),
fin_espe_ong varchar(300),
desc_ong varchar(600),
user varchar(10),
idade date,
sexo varchar(3),
bio varchar(600),
PRIMARY KEY(cod_user,cnpj)
);

CREATE TABLE ATENDIMENTO (
cod_especialidade smallint,
cod_user smallint,
cnpj int,
user varchar(10),
FOREIGN KEY(cod_user) REFERENCES USER(cod_user)
);

CREATE TABLE ESPECIALIDADE (
nome varchar(60),
cod_especialidade smallint PRIMARY KEY,
descricao varchar(600),
cod_categoria smallint
);

CREATE TABLE CATEGORIA (
descricao varchar(600),
nome varchar(60),
cod_categoria smallint PRIMARY KEY
);

CREATE TABLE participacao (
cod_user smallint,
cnpj int,
user varchar(10),
cod_atividade smallint,
FOREIGN KEY(cod_user) REFERENCES USER (cod_user)
);

CREATE TABLE avaliacao (
nota tinyint,
cod_atividade smallint,
cod_user smallint,
cnpj int,
user varchar(10),
FOREIGN KEY(cod_user) REFERENCES USER (cod_user)
);

CREATE TABLE ATIVIDADES (
descricao varchar(600),
titulo varchar(100),
data date,
hora time,
nro_vagas int,
cod_atividade smallint PRIMARY KEY
);

CREATE TABLE LOCAL (
cod_local smallint PRIMARY KEY,
nome varchar(100),
endereco varchar(100)
);

CREATE TABLE LOCAL_ATIVIDADE (
cod_local smallint,
cod_atividade smallint,
FOREIGN KEY(cod_local) REFERENCES LOCAL (cod_local)/*falha: chave estrangeira*/
);

ALTER TABLE ATENDIMENTO ADD FOREIGN KEY(cod_especialidade) REFERENCES ESPECIALIDADE (cod_especialidade);
ALTER TABLE ESPECIALIDADE ADD FOREIGN KEY(cod_categoria) REFERENCES CATEGORIA (cod_categoria);
ALTER TABLE participacao ADD FOREIGN KEY(cod_atividade) REFERENCES ATIVIDADES (cod_atividade);
ALTER TABLE avaliacao ADD FOREIGN KEY(cod_atividade) REFERENCES ATIVIDADES (cod_atividade);

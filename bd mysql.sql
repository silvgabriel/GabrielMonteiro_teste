CREATE TABLE motorista(
mt_id int (3) AUTO_INCREMENT,
mt_nome varchar(35),
mt_dtnasc varchar(10),
mt_cpf varchar(11),
mt_modelcar varchar(20),
mt_status int(1),
mt_sexo varchar(10),
primary key (mt_id),
constraint mt_status_ck CHECK (mt_status IN(1,0)),
UNIQUE (mt_cpf)
);

ALTER TABLE motorista auto_increment = 1;


CREATE TABLE passageiro(
ps_id int (3) AUTO_INCREMENT,
ps_nome varchar(35),
ps_dtnasc varchar(10),
ps_cpf varchar(11),
ps_sexo varchar(10),
primary key (ps_id),
UNIQUE (ps_cpf)
);

ALTER TABLE passageiro auto_increment = 1;

CREATE TABLE corrida(
cr_id int (3) AUTO_INCREMENT,
cr_nomemt varchar(35),
cr_nomeps varchar(35),
cr_data varchar(10),
cr_valor varchar(10),
primary key (cr_id),
UNIQUE (cr_id)
);

ALTER TABLE corrida auto_increment = 1;


INSERT INTO motorista (mt_nome,mt_dtnasc,mt_cpf,mt_modelcar,mt_status,mt_sexo) VALUES('Gabriel Monteiro Camargo da Silva','15/08/1996','11111111111','FIAT 2011',1,'Masculino');
INSERT INTO motorista (mt_nome,mt_dtnasc,mt_cpf,mt_modelcar,mt_status,mt_sexo) VALUES('Rafaela Campos Silva','02/04/1994','22222222222','ONIX 2017',1,'Feminino');
INSERT INTO motorista (mt_nome,mt_dtnasc,mt_cpf,mt_modelcar,mt_status,mt_sexo) VALUES('Lucas Menezes','17/09/1997','33333333333','HB20 2015',0,'Masculino');

INSERT INTO passageiro (ps_nome,ps_dtnasc,ps_cpf,ps_sexo) VALUES('Ricardo Bezerro','15/12/1994','11111111111','Masculino');
INSERT INTO passageiro (ps_nome,ps_dtnasc,ps_cpf,ps_sexo) VALUES('Maria Joaquina','17/02/1991','22222222222','Feminino');
INSERT INTO passageiro (ps_nome,ps_dtnasc,ps_cpf,ps_sexo) VALUES('Marcio Feitoza','10/08/1999','33333333333','Masculino');
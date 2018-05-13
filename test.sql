DROP TABLE motorista;
DROP TABLE passageiro;
DROP TABLE corrida;

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


SELECT * FROM corrida;
SELECT * FROM motorista;
SELECT * FROM passageiro;
SELECT mt_id,mt_nome FROM motorista;



INSERT INTO motorista (mt_nome,mt_dtnasc,mt_cpf,mt_modelcar,mt_status,mt_sexo) VALUES('gabriel','15/08/1996','44418522824','fiat',1,'masculino');

SELECT t1.mt_nome FROM motorista t1 INNER JOIN corrida t2 ON (t1.mt_id = t2.cr_id);
SELECT t1.mt_nome FROM motorista t1 INNER JOIN corrida t2 ON (t1.mt_id = '2');
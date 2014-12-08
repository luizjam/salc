-- Criar a o banco com charset utf8
create database test_dblicita default character set utf8 collate utf8_unicode_ci;

-- Usar o banco
use test_dblicita;

-- Criar a tabela tb_usuarios
create table tb_usuarios(
 cd_usuario int unsigned not null auto_increment primary key,
 nm_nome varchar(100) not null,
 ds_cpf char(11) not null,
 ds_email varchar(100) not null,
 ds_fone varchar(14), 
 ds_celular varchar(14))
 engine = innodb character set utf8 collate utf8_unicode_ci;

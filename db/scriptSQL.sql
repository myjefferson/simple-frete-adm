/*Criação do banco de dados*/
create database SimpleFrete;

/*Utiliza o banco de dados criado*/
use SimpleFrete;

/*Criação da tabela administradores*/
create table `Administradores`(
	AdministradorID int (30) primary key auto_increment,
    tipoUsuario varchar (20), /*ADM, MOT, FUN*/
    Foto text,
    Nome varchar (30) not null,
    Sobrenome varchar(30),
    CPF int (15) not null,
    Disponibilidade varchar (1),
    dataCriacao datetime not null,
    dataModificacao datetime not null
);

/*Criação da tabela funcionarios*/
create table `Funcionarios`(
	FuncionarioID int (30) primary key auto_increment,
    tipoUsuario varchar (20) not null, /*ADM, MOT, FUN*/
    Foto text,
    Nome varchar (30) not null,
    CPF int (15) not null,
	dataNascimento date,
    Disponibilidade tinyint (1), /* 1 = Ativo | 2 = Inativo */
    dataCriacao datetime not null,
    dataModificacao datetime not null
);

/*Criação da tabela motoristas*/
create table `Motoristas`(
	MotoristaID int (30) primary key auto_increment,
    tipoUsuario varchar (20), /*ADM, MOT, FUN*/
	Foto text,
    Nome varchar (30) not null,
    dataNascimento date,
    CPF int (15) not null,
    CNHCategoria varchar (20) not null,
    CNHLocal varchar (20) not null,
    CNHNumeroRegistro varchar (20) not null,
    Telefone varchar (20),
    CEP varchar (20),
    Endereco varchar (30),
    Cidade varchar (20),
    Estado varchar (20),
    NumeroCasa varchar (15),
    Complemento varchar (30),
    Disponibilidade tinyint (1), /*1 = Ativo | 2 = Inativo*/
    dataCriacao datetime not null,
    dataModificacao datetime not null
); 

select * from Motoristas;

create table `Veiculos`(
	VeiculoID int (30) primary key auto_increment,
    MotoristaID int (30),
    Foto text,
    Marca varchar (20),
    Modelo varchar (20),
    Cor varchar (15),
    Placa varchar (10),
    localPlaca varchar (30),
    Chassi varchar (30),
    Renavan int (20),
    Disponibilidade tinyint (1), /*1 = Ativo | 2 = Inativo*/
    dataCriacao datetime not null,
    dataModificacao datetime not null
);

create table `Fretes`(
	FreteID int (30) primary key auto_increment,
	VeiculoID int (30),
    MotoristaID int (30),
    ClienteID int (30),
    TipoCargaID int (30),
    Origem varchar(40),
    Destino varchar (40),
    
    Disponibilidade varchar (1), /*A = Ativo | I = Inativo*/
    dataCriacao datetime not null,
    dataModificacao datetime not null
);

create table `TipoCargas`(
	TipoCargaID int (30) primary key auto_increment,
    Descricao text
);

create table `Logins`(
	RecuperacaoID int (30) primary key auto_increment,
    UsuarioID int (20),
    CPF int (15),
	Email varchar(30) not null,
    Senha varchar (13) not null,
    chaveSeguranca text,
    dataCriacao datetime not null,
    dataModificacao datetime not null
); 

/*drop de tabelas*/
/*
drop table RecuperarConta;
drop table Funcionarios;
drop table Veiculos;
drop table Administradores;
drop table Motoristas;
*/

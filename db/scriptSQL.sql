/*Criação do banco de dados*/
create database SimpleFrete;

/*Utiliza o banco de dados criado*/
use SimpleFrete;

/*Criação da tabela administradores*/
create table `Administradores`(
	AdministradorID int (30) primary key auto_increment,
    tipoUsuario varchar (20), /*ADM, MOT, FUN*/
    Nome varchar (30) not null,
    Sobrenome varchar(30),
    Email varchar(30) not null,
    Senha varchar(10) not null,
    CPF int (15) not null,
    Disponibilidade varchar (1),
    dataCriacao datetime not null,
    dataModificacao datetime not null
); 

/*Criação da tabela funcionarios*/
create table `Funcionarios`(
	FuncionarioID int (30) primary key auto_increment,
    tipoUsuario varchar (20) not null, /*ADM, MOT, FUN*/
    Nome varchar (30) not null,
    Sobrenome varchar(30),
    Email varchar(30) not null,
    Senha varchar(10) not null,
    CPF int (15) not null,
	dataNascimento date,
    Disponibilidade varchar (1),
    dataCriacao datetime not null,
    dataModificacao datetime not null
); 

/*Criação da tabela motoristas*/
create table `Motoristas`(
	MotoristaID int (30) primary key auto_increment,
    tipoUsuario varchar (20), /*ADM, MOT, FUN*/
    Nome varchar (30) not null,
    Sobrenome varchar(30),
    Email varchar(30) not null,
    Senha varchar (13) not null,
    CPF int (15) not null,
    dataNascimento date,
    CNH int (12) not null,
    Disponibilidade varchar (1),
    dataCriacao datetime not null,
    dataModificacao datetime not null
); 

create table `Veiculos`(
	VeiculoID int (30) primary key auto_increment,
    MotoristaID int (30),
    Marca varchar (20),
    Modelo varchar (20),
    Cor varchar (15),
    Placa varchar (10),
    localPlaca varchar (30),
    Chassi varchar (30),
    Renavan int (20),
    Disponibilidade varchar (1), /*A = Ativo | I = Inativo*/
    dataCriacao datetime not null,
    dataModificacao datetime not null
);

create table `RecuperarConta`(
	RecuperacaoID int (30) primary key auto_increment,
    UsuarioID int (20),
    CPF int (15),
    Email varchar (30),
    chaveSeguranca text,
    dataCriacao datetime not null,
    dataModificacao datetime not null
); 









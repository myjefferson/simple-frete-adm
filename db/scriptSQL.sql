/*Criação do banco de dados*/
create database simplefrete;

/*Utiliza o banco de dados criado*/
use simplefrete;   

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
    Disponibilidade tinyint (1), /* 1 = Ativo | 0 = Inativo */
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
    Disponibilidade tinyint (1), /* 1 = Ativo | 0 = Inativo */
    dataCriacao datetime not null,
    dataModificacao datetime not null
); 

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
    Disponibilidade tinyint (1), /* 1 = Ativo | 0 = Inativo */
    dataCriacao datetime not null,
    dataModificacao datetime not null
);

create table `Fretes`(
	FreteID int (30) primary key auto_increment,
	VeiculoID int (30),
    MotoristaID int (30),
    ClienteID int (30),
    TipoCargaID int (30),
    SituacaoFreteID int(10),
    enderecoOrigem varchar(40),
    enderecoDestino varchar (40),
    tempoEntrega date,
    valorTotal varchar (40),
    Descricao text,
    Disponibilidade tinyint (1), /* 1 = Ativo | 0 = Inativo */
    dataCriacao datetime not null,
    dataModificacao datetime not null
);

create table `SituacoesFrete`(
	SituacaoFreteID int (30) primary key auto_increment,
    DescricaoFrete varchar(30)
);

create table `TipoCargas`(
	TipoCargaID int (30) primary key auto_increment,
    DescricaoCarga text
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
drop table TipoCargas;
drop table Logins;
drop table Fretes;
drop table SituacoesFrete;
*/

/*insert dos tipos das cargas*/
/*
insert into `SituacoesFrete` set DescricaoFrete = 'Solicitação';
insert into `SituacoesFrete` set DescricaoFrete = 'Aguardando pagamento';
insert into `SituacoesFrete` set DescricaoFrete = 'Contratado';
insert into `SituacoesFrete` set DescricaoFrete = 'Em andamento';
insert into `SituacoesFrete` set DescricaoFrete = 'Finalizado';
*/

/*insert das situacoes dos fretes*/
/*
insert into `TipoCargas` set DescricaoCarga = 'A Granel';
insert into `TipoCargas` set DescricaoCarga = 'Refrigerada';
insert into `TipoCargas` set DescricaoCarga = 'Carga viva';
insert into `TipoCargas` set DescricaoCarga = 'Transporte de veículos';
insert into `TipoCargas` set DescricaoCarga = 'Carga de medicamentos';
insert into `TipoCargas` set DescricaoCarga = 'Carga seca';
insert into `TipoCargas` set DescricaoCarga = 'Cargas perigosas';
*/
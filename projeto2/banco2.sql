create database sistema;

use sistema;

create table cliente(
    id_cli int primary key auto_increment,
     nome varchar(50),
     cpf varchar (11),
     email varchar(50),
     senha char(32),
     datnasc date,
     perfil enum("cliente")
);
insert into cliente values(null,'Ayrton Barros','02187456998','tonbnary@gmail.com',md5('123456'),'2003-05-05','cliente');


create table hoteis(
    id_hotel int primary key auto_increment,
    nome_hotel varchar(40)

);

insert into hoteis values(null,'Aquamarine Angra');
insert into hoteis values(null,'Aquamarine Búzios');
insert into hoteis values(null,'Aquamarine Arral Do Cabo');


create table acomodacoes(
    id_acomod int primary key auto_increment,
    suites varchar(40),
    id_hotel not null,
    FOREIGN key (id_hotel) REFERENCES hoteis(id_hotel)

);
insert into acomodacoes values(null,'Suíte Básica',1);
insert into acomodacoes values(null,'Suíte Master',1);
insert into acomodacoes values(null,'Suíte Plus',1);

insert into acomodacoes values(null,'Suíte Básica',2);
insert into acomodacoes values(null,'Suíte Master',2);
insert into acomodacoes values(null,'Suíte Plus',2);

insert into acomodacoes values(null,'Suíte Básica',3);
insert into acomodacoes values(null,'Suíte Master',3);
insert into acomodacoes values(null,'Suíte Plus',3;


create table reservas(
    cod_reser int primary key auto_increment,
    dia date,
    hora time,
    id_cli int not null,
    foreign key (id_cli) references cliente(id_cli),
    id_acomod int not null,
    foreign key (id_acomod) references acomodacoes(id_acomod)
    
);

insert into reservas values (null,'2023-08-10','19:00',1,1);



create database SIGD;

use SIGD;

create table Usuario (
IdUsuario serial, 
CI varchar (8),
Nombre varchar (50),
Apellido varchar (50),
Email varchar (80),
Contrasenia varchar (80),
user_type varchar(15),

Primary key (IdUsuario)
);

create table Equipo (
IdEquipo serial, 
Nombre varchar (50),
team_type varchar(10),

Primary key (IdEquipo)
);

insert into Usuario (CI, Nombre, Apellido, Email, Contrasenia, user_type)
values ("12345678", "Administrativo", "Administrativo", "administrativo@gmail.com", 1234, "Administrativo");

insert into Usuario (CI, Nombre, Apellido, Email, Contrasenia, user_type)
values ("12345678", "Admin", "Admin", "admin@gmail.com", 1234, "Admin");

insert into Usuario (CI, Nombre, Apellido, Email, Contrasenia, user_type)
values ("12345678", "Analista", "Analista", "analista@gmail.com", 1234, "Analista");

insert into Usuario (CI, Nombre, Apellido, Email, Contrasenia, user_type)
values ("12345678", "Jugador", "Jugador", "Jugador@gmail.com", 1234, "Jugador");

insert into Usuario (CI, Nombre, Apellido, Email, Contrasenia, user_type)
values ("12345678", "Director T", "Director T", "DirectorT@gmail.com", 1234, "DirectorT");

insert into Usuario (CI, Nombre, Apellido, Email, Contrasenia, user_type)
values ("12345678", "Director T", "Juez", "Juez@gmail.com", 1234, "Juez");

insert into Usuario (CI, Nombre, Apellido, Email, Contrasenia, user_type)
values ("12345678", "Usuario", "Usuario", "usuario@gmail.com", 1234, "Usuario");



drop table Usuario;

select * from Usuario;

select * from Equipo;




create table Partido (

IdPartido varchar (10),
primary key (IdPartido)
);

create table Jugador (

CI char (8),
Posición varchar (2),
Edad char (2),
Altura char (3),
Num_Camiseta char (2)
);

create table Administrador (

Tipo varchar (20)
);


create table Incidencia (

Tipo varchar(15),
primary key (Tipo)
);


create table Gol (

IdGol varchar (20),
Minuto date,
primary key (IdGol)
);

create table Asistencia (

IdAsist varchar (20),
minuto date,
primary key (IdAsist)
);

create table Cancha (

IdCancha varchar (5),
Departamento varchar (20),
Nombre varchar (25),
primary key (IdCancha)
);

create table Deporte (

IdDeporte varchar (10),
Primary key (IdDeporte)
);

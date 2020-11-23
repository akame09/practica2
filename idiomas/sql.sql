create database idiomas;

use idiomas;

CREATE TABLE Profesor(

idprofesor int primary key auto_increment,
nombre varchar(40),
idioma varchar(40)
);

CREATE TABLE Programacion(

idprogramacion int primary key auto_increment,
inicio varchar(40),
tipo varchar(40),
idprofesor int,
FOREIGN KEY (idprofesor) REFERENCES Profesor(idprofesor)

);

CREATE TABLE Leccion(

idleccion int primary key auto_increment,
numero int,
estado varchar(40),
comentario_profesor varchar(100),
comentario_estudiante varchar(100),
idprogramacion int,
FOREIGN KEY (idprogramacion) REFERENCES Programacion(idprogramacion)
);

CREATE TABLE Estudiante(

idEstudiante int primary key auto_increment,
nombre varchar(40),
email varchar(40),
idleccion int,
FOREIGN KEY (idleccion) REFERENCES Leccion(idleccion)
);




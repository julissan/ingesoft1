create database Semillero;

use Semillero;

CREATE TABLE Integrante (
	IdIntegrante INT NOT NULL AUTO_INCREMENT,
    Nombre VARCHAR(50),
    Documento VARCHAR(50),
    Teléfono VARCHAR(20),
    Correo VARCHAR(50),
    PRIMARY KEY(IdIntegrante)
)   ENGINE=InnoDB;

CREATE TABLE Solicitud (
	IdSolicitud INT NOT NULL AUTO_INCREMENT,
    Nombre VARCHAR(50),
    Documento VARCHAR(50),
    Teléfono VARCHAR(20),
    Correo VARCHAR(50),
    PRIMARY KEY(IdSolicitud)
)   ENGINE=InnoDB;

CREATE TABLE Noticia (
	IdNoticia INT NOT NULL AUTO_INCREMENT,
    Titulo VARCHAR(100),
    Texto TEXT,
    Imagen VARCHAR(100),
    PRIMARY KEY(IdNoticia)
)   ENGINE=InnoDB;

CREATE TABLE Proyecto (
	IdProyecto INT NOT NULL AUTO_INCREMENT,
    Titulo VARCHAR(100),
    Texto TEXT,
    Imagen VARCHAR(100),
    Estado VARCHAR(10),
    PRIMARY KEY(IdProyecto)
)   ENGINE=InnoDB;

CREATE TABLE Publicacion (
	IdPublicacion INT NOT NULL AUTO_INCREMENT,
    Titulo VARCHAR(100),
    Texto TEXT,
    Imagen VARCHAR(100),
    PRIMARY KEY(IdPublicacion)
)   ENGINE=InnoDB;

CREATE TABLE Evento (
	IdEvento INT NOT NULL AUTO_INCREMENT,
    Titulo VARCHAR(100),
    Texto TEXT,
    Fecha DATETIME,
    Imagen VARCHAR(100),
    PRIMARY KEY(IdEvento)
)   ENGINE=InnoDB;

CREATE TABLE FotoGaleria (
	IdFotoGaleria INT NOT NULL AUTO_INCREMENT,
    Imagen VARCHAR(100),
    Descripcion TEXT,
    PRIMARY KEY(IdFotoGaleria)
)   ENGINE=InnoDB;

INSERT INTO Integrante(IdIntegrante, Nombre, Documento, Teléfono, Correo) VALUES (1,"José Martinez","1136591", "6153450", "jmartinez@gmail.com");
INSERT INTO Integrante(IdIntegrante, Nombre, Documento, Teléfono, Correo) VALUES (2,"Paula Rosas","97243167", "6871240", "paula_rosas@hotmail.com");

INSERT INTO Solicitud(IdSolicitud, Nombre, Documento, Teléfono, Correo) VALUES (1,"pepito Pérez","7982145", "8394012", "pperez@gmail.com");
INSERT INTO Solicitud(IdSolicitud, Nombre, Documento, Teléfono, Correo) VALUES (2,"Andres Jímenez","112645095", "3103402050", "ajimenez@hotmail.com");

INSERT INTO Noticia(IdNoticia,Titulo,Texto,Imagen) VALUES (1,"Egipto lanza al espacio su primer satélite de telecomunicaciones","El Cairo, 27 nov (Prensa Latina) Después de tres intentos despegues suspendidos durante el pasado fin de semana, Egipto lanzó con éxito su satélite Tiba 1 desde un centro espacial en la Guayana Francesa, en América del Sur, se conoció hoy aquí.", "");
INSERT INTO Noticia(IdNoticia,Titulo,Texto,Imagen) VALUES (2,"La NASA distingue a una ingeniera de telecomunicaciones valenciana","Eva Peral, ingeniera de telecomunicación por la Universitat Politècnica de València (UPV), ha recibido la Medalla al Éxito Público de la Administración Nacional de la Aeronáutica y del Espacio (NASA), otorgada a aquellas personas que posibilitan la culminación de misiones de la agencia espacial estadounidense, informa el centro docente.", "");

INSERT INTO Proyecto(IdProyecto,Titulo,Texto,Imagen,Estado) VALUES (1,"Proyecto Implementacion de Redes - Sistemas","Descripción: Diseñar el direccionamiento para una empresa que posee 3 sedes (New York, Miami y Canadá) cada una con la red general respectivamente WAN (16.0.0.0,17.0.0.0 y 18.0.0.0) y las redes LAN respectivamente (172.16.0.0,192.168.0.0 y 200.100.0.0)", "", "Actual");
INSERT INTO Proyecto(IdProyecto,Titulo,Texto,Imagen,Estado) VALUES (2,"Proyecto Intregrado Nivel I - Soporte y Seguridad de redes de datos","Descripción: El estudiante utilizando máquinas virtuales, instalara y configurara un sistema operativo Windows 2008R2 Server y adicional  y una o dos máquinas con plataforma cliente. En el servidor debe  configurar los servicios básicos, utilizar un switch para la conexión entre equipos físicos, crear la tabla de enrutamiento para el DHCP e integrar para la infraestructura inalámbrica con un Access point  para acceder a la red desde un dispositivo de manera inalámbrica.", "", "Pasado");

INSERT INTO Publicacion(IdPublicacion,Titulo,Texto,Imagen) VALUES (1,"Publicación1","Texto de prueba para una publicación.", "");
INSERT INTO Publicacion(IdPublicacion,Titulo,Texto,Imagen) VALUES (2,"Publicación2","Texto de prueba para una publicación.", "");

INSERT INTO Evento(IdEvento,Titulo,Texto,Fecha,Imagen) VALUES (1,"La Noche de las Telecomunicaciones se celebrará este viernes en Guadalajara","Esta se complementará con cinco conferencias durante la mañana del viernes abiertas a toda la ciudadanía, que tendrán lugar en el salón de actos de la Delegación de la Junta de 11.00 a 13.00 horas.",'2019-11-29 11:00:00', "");
INSERT INTO Evento(IdEvento,Titulo,Texto,Fecha,Imagen) VALUES (2,"Cybersecurity Days, Aprende a Cuidar tu Información","El Poli, se complace en invitar a la comunidad en general a la Segunda Edición de los CyberSecurity Days Poli organizados por la Facultad de Ingeniería, Diseño e Innovación y la Gerencia de Tecnologías de la Información y Comunicaciones. El evento se desarrollará los días 18 y 19 de noviembre, dentro de las actividades se ofrecerán conferencias, sensibilizaciones y la competencia Capture The Flag (CTF CSD Poli 2019).",'2019-11-18 18:30:00', "");

INSERT INTO FotoGaleria(IdFotoGaleria,Imagen,Descripcion) VALUES (1,"","Satélite de comunicaciones Tiba-1 de Egipto.");
INSERT INTO FotoGaleria(IdFotoGaleria,Imagen,Descripcion) VALUES (2,"","Imagen promocional Cybersecurity Days POLI.");


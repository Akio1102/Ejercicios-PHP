CREATE DATABASE campus2;

CREATE TABLE camper(
    id INT NOT NULL AUTO_INCREMENT,
    nombres VARCHAR(255) NOT NULL,
    direccion VARCHAR(255) NOT NULL,
    logros VARCHAR(255) NOT NULL,
    ser INT(10) NOT NULL,
    ingles VARCHAR(255) NOT NULL,
    skill VARCHAR(255) NOT NULL,
    asistencia VARCHAR(255) NOT NULL,
    especialidad VARCHAR(255) NOT NULL,    
    PRIMARY KEY(id)
);

CREATE TABLE users(
    id INT NOT NULL AUTO_INCREMENT,
    idCamper INT NOT NULL,
    email VARCHAR(80) NOT NULL,
    username VARCHAR(80) NOT NULL,
    password VARCHAR(80) NOT NULL,   
    PRIMARY KEY(id),
    FOREIGN KEY (idCamper) REFERENCES camper(id)
);

DROP TABLE camper;

CREATE DATABASE facturacion;

CREATE TABLE categorias(
    categoriaID INT NOT NULL AUTO_INCREMENT,
    categoriaNombres VARCHAR(255) NOT NULL,
    descripcion VARCHAR(255) NOT NULL,
    imagen VARCHAR(255) NOT NULL,  
    PRIMARY KEY(categoriaID)
);
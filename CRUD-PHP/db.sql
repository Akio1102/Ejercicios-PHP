CREATE DATABASE campus2;

CREATE TABLE camper(
    id INT NOT NULL AUTO_INCREMENT,
    nombres VARCHAR(255) NOT NULL,
    direccion VARCHAR(255) NOT NULL,
    logros VARCHAR(255) NOT NULL,
    ser VARCHAR(10) NOT NULL,
    ingles VARCHAR(255) NOT NULL,
    skills VARCHAR(2) NOT NULL,
    asistencia VARCHAR(255) NOT NULL,
    especialidad VARCHAR(255) NOT NULL,    
    PRIMARY KEY(id)
);

DROP TABLE camper;
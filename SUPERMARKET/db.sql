CREATE DATABASE Supermarket;

USE Supermarket;

CREATE TABLE Categorias(
    categoriasId INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    descripcion VARCHAR(255) NOT NULL,
    imagen VARCHAR(255) NOT NULL,
    PRIMARY KEY(categoriasId)
);

CREATE TABLE Clientes(
    clienteId INT NOT NULL AUTO_INCREMENT,
    celular INT NOT NULL,
    compania VARCHAR(255) NOT NULL,
    PRIMARY KEY(clienteId)
);

CREATE TABLE Empleados(
    empleadoId INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    celular INT NOT NULL,
    direccion VARCHAR(255) NOT NULL,
    imagen VARCHAR(255) NOT NULL,
    PRIMARY KEY(empleadoId)
);

CREATE TABLE Facturas(
    facturaId INT NOT NULL AUTO_INCREMENT,
    empleadoId INT,
    clienteId INT,
    fecha DATE,
    PRIMARY KEY(facturaId),
    FOREIGN KEY (empleadoId) REFERENCES Empleados(empleadoId),
    FOREIGN KEY (clienteId) REFERENCES Clientes(clienteId)
);

CREATE TABLE Proveedores(
    proveedorId INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(10) NOT NULL,
    telefono INT NOT NULL,
    ciudad VARCHAR(12) NOT NULL,
    PRIMARY KEY(proveedorId)
);

CREATE TABLE Productos(
    productoId INT NOT NULL AUTO_INCREMENT,
    categoriasId INT,
    precioUnitario INT NOT NULL,
    stock INT NOT NULL,
    unidadesPedidas INT NOT NULL,
    proveedorId INT,
    nombreProducto VARCHAR(10) NOT NULL,
    descontinuado BOOLEAN,
    PRIMARY KEY(productoId),
    FOREIGN KEY (categoriasId) REFERENCES Categorias(categoriasId),
    FOREIGN KEY (proveedorId) REFERENCES Proveedores(proveedorId)
);

CREATE TABLE FacturaDetalle(
    facturaId INT,
    productoId INT,
    cantidadId INT NOT NULL,
    precioVenta INT NOT NULL,
    FOREIGN KEY (facturaId) REFERENCES Facturas(facturaId),
    FOREIGN KEY (productoId) REFERENCES Productos(productoId)
);
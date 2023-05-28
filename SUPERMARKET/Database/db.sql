CREATE DATABASE Supermarket;

USE Supermarket;

CREATE TABLE categorias(
    categoriasId INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    descripcion VARCHAR(255) NOT NULL,
    imagen VARCHAR(255) NOT NULL,
    PRIMARY KEY(categoriasId)
);

CREATE TABLE clientes(
    clienteId INT NOT NULL AUTO_INCREMENT,
    celular INT NOT NULL,
    compania VARCHAR(255) NOT NULL,
    PRIMARY KEY(clienteId)
);

CREATE TABLE empleados(
    empleadoId INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    celular INT NOT NULL,
    direccion VARCHAR(255) NOT NULL,
    imagen VARCHAR(255) NOT NULL,
    PRIMARY KEY(empleadoId)
);

CREATE TABLE facturas(
    facturaId INT NOT NULL AUTO_INCREMENT,
    empleadoId INT,
    clienteId INT,
    fecha DATE,
    PRIMARY KEY(facturaId),
    FOREIGN KEY (empleadoId) REFERENCES empleados(empleadoId),
    FOREIGN KEY (clienteId) REFERENCES clientes(clienteId)
);

CREATE TABLE proveedores(
    proveedorId INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(10) NOT NULL,
    telefono INT NOT NULL,
    ciudad VARCHAR(12) NOT NULL,
    PRIMARY KEY(proveedorId)
);

CREATE TABLE productos(
    productoId INT NOT NULL AUTO_INCREMENT,
    categoriasId INT,
    precioUnitario INT NOT NULL,
    stock INT NOT NULL,
    unidadesPedidas INT NOT NULL,
    proveedorId INT,
    nombreProducto VARCHAR(10) NOT NULL,
    descontinuado BOOLEAN,
    PRIMARY KEY(productoId),
    FOREIGN KEY (categoriasId) REFERENCES categorias(categoriasId),
    FOREIGN KEY (proveedorId) REFERENCES proveedores(proveedorId)
);

CREATE TABLE facturaDetalle(
    facturaId INT,
    productoId INT,
    cantidadId INT NOT NULL,
    precioVenta INT NOT NULL,
    FOREIGN KEY (facturaId) REFERENCES facturas(facturaId),
    FOREIGN KEY (productoId) REFERENCES productos(productoId)
);
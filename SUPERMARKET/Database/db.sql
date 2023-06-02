CREATE DATABASE supermarket;

USE supermarket;

CREATE TABLE categorias(
    categoriasId INT NOT NULL AUTO_INCREMENT,
    categorias_nombre VARCHAR(255) NOT NULL,
    descripcion VARCHAR(255) NOT NULL,
    imagen VARCHAR(255) NOT NULL,
    PRIMARY KEY(categoriasId)
);

CREATE TABLE clientes(
    clienteId INT NOT NULL AUTO_INCREMENT,
    clientes_nombre VARCHAR(255) NOT NULL,
    celular INT NOT NULL,
    compania VARCHAR(255) NOT NULL,
    PRIMARY KEY(clienteId)
);

CREATE TABLE empleados(
    empleadoId INT NOT NULL AUTO_INCREMENT,
    empleado_nombre VARCHAR(255) NOT NULL,
    -- rol VARCHAR(255) NOT NULL,
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
    proveedor_nombre VARCHAR(10) NOT NULL,
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
    nombreProducto VARCHAR(50) NOT NULL,
    descontinuado VARCHAR(50) NOT NULL,
    PRIMARY KEY(productoId),
    FOREIGN KEY (categoriasId) REFERENCES categorias(categoriasId),
    FOREIGN KEY (proveedorId) REFERENCES proveedores(proveedorId)
);

CREATE TABLE facturaDetalle(
    facturaId INT,
    productoId INT,
    cantidad INT NOT NULL,
    precioVenta INT NOT NULL,
    FOREIGN KEY (facturaId) REFERENCES facturas(facturaId),
    FOREIGN KEY (productoId) REFERENCES productos(productoId)
);

CREATE TABLE users(
    id INT NOT NULL AUTO_INCREMENT,
    id_Empleado INT NOT NULL,
    email VARCHAR(80) NOT NULL,
    username VARCHAR(80) NOT NULL,
    password VARCHAR(80) NOT NULL,   
    PRIMARY KEY(id),
    FOREIGN KEY (id_Empleado) REFERENCES empleados(empleadoId)
);


INSERT INTO empleados (empleado_nombre,celular,direccion,imagen) VALUES("Admin",123,"Calle 1","xd");
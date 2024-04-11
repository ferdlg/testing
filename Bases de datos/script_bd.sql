DROP DATABASE IF exists proyectovehiculo_db;
CREATE DATABASE proyectovehiculo_db;
use proyectovehiculo_db;

-- Tabla datos_personales 
CREATE TABLE datos_personales (
    datId INT PRIMARY KEY AUTO_INCREMENT,
    datNombre VARCHAR(255) NOT NULL,
    datApellido VARCHAR(255) NOT NULL,
    datTelefono VARCHAR(255),
    datCorreo VARCHAR(255) NOT NULL
);
-- Tabla rol
CREATE TABLE rol (
    rolId INT AUTO_INCREMENT PRIMARY KEY,
    rolTipo VARCHAR(255) NOT NULL
);

-- Tabla usuario
CREATE TABLE usuario (
    usuarioId INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    datId INT, 
    FOREIGN KEY (datId) REFERENCES datos_personales(datId) 
);


-- Tabla usuario_rol 
CREATE TABLE usuario_rol (
    usuarioId INT,
    rolId INT,
    FOREIGN KEY (usuarioId) REFERENCES usuario(usuarioId),
    FOREIGN KEY (rolId) REFERENCES rol(rolId),
    PRIMARY KEY (usuarioId, rolId)
);

-- Tabla categoria 
CREATE TABLE categoria (
    catId INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL
);

CREATE TABLE vehiculo (
    vehPlaca INT PRIMARY KEY,
    datId INT,
    catId INT,
    vehModelo VARCHAR(255),
    vehMarca VARCHAR(255),
    vehColor VARCHAR(255),
    vehEstado VARCHAR(255),
    vehPrecio DECIMAL(10, 2),
    FOREIGN KEY (datId) REFERENCES datos_personales(datId),
    FOREIGN KEY (catId) REFERENCES categoria(catId)
);

INSERT INTO rol (rolTipo) VALUES
('vendedor'),
('comprador');

INSERT INTO categoria (nombre) VALUES
('Camioneta'),
('Todoterreno'),
('Deportivo'),
('Familiar'),
('Clasico');

INSERT INTO datos_personales(datNombre, datApellido, datTelefono, datCorreo) VALUES
('Mafe','Pardo','3229111150','fernanda@gmail.com');

INSERT INTO usuario (email, password, datId) VALUES
('fernanda@gmail.com', '$2y$10$SioUtGD8jwaQRHZFjS6flue1mEmnwcvS9JajekoFbOBqcXbiw8mZu', 1);

INSERT INTO usuario_rol (usuarioId, rolId) VALUES
(1, 1);
INSERT INTO vehiculo (vehPlaca, datId, catId, vehModelo, vehMarca, vehColor, vehEstado, vehPrecio) VALUES
(147852, 1, 1, '2001', 'BMW', 'Rojo', 'Nuevo', 15000.00),
(159675, 1, 2, '2004', 'TOYOTA', 'Azul', 'Usado', 12000.00),
(369243, 1, 3, '2016', 'NISSAN', 'Plateado', 'Nuevo', 18000.00);
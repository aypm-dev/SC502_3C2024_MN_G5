-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS lesco_project;
USE lesco_project;

-- Crear la tabla de usuarios
CREATE TABLE usuarios (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) UNIQUE NOT NULL,
    contrasena VARCHAR(255) NOT NULL,
    tipo_usuario ENUM('cliente', 'traductor', 'administrador') NOT NULL,
    minutos INT DEFAULT 0, -- columna para los minutos del usuario
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Crear la tabla de traductores
CREATE TABLE traductores (
    id_traductor INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    especialidad VARCHAR(100) NOT NULL,
    disponibilidad ENUM('disponible', 'ocupado') DEFAULT 'disponible',
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Crear la tabla de videollamadas
CREATE TABLE videollamadas (
    id_videollamada INT AUTO_INCREMENT PRIMARY KEY,
    id_cliente INT NOT NULL, 
    id_traductor INT,  
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    duracion INT NOT NULL, -- duración en minutos
    estado ENUM('pendiente', 'completada', 'cancelada') DEFAULT 'pendiente',
    FOREIGN KEY (id_cliente) REFERENCES usuarios(id_usuario) ON DELETE CASCADE,
    FOREIGN KEY (id_traductor) REFERENCES traductores(id_traductor) ON DELETE SET NULL
);

-- Crear la tabla de evaluaciones de traductores
CREATE TABLE evaluaciones (
    id_evaluacion INT AUTO_INCREMENT PRIMARY KEY,
    id_traductor INT NOT NULL,
    id_cliente INT NOT NULL,
    calificacion INT CHECK (calificacion BETWEEN 1 AND 5),
    comentario TEXT,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_traductor) REFERENCES traductores(id_traductor) ON DELETE CASCADE,
    FOREIGN KEY (id_cliente) REFERENCES usuarios(id_usuario) ON DELETE CASCADE
);

-- Crear la tabla de historial de llamadas
CREATE TABLE historial_llamadas (
    id_historial INT AUTO_INCREMENT PRIMARY KEY,
    id_cliente INT NOT NULL,
    id_traductor INT NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_cliente) REFERENCES usuarios(id_usuario) ON DELETE CASCADE,
    FOREIGN KEY (id_traductor) REFERENCES traductores(id_traductor) ON DELETE CASCADE
);

-- Insertar datos de prueba en la tabla de usuarios
INSERT INTO usuarios (nombre, correo, contrasena, tipo_usuario, minutos)
VALUES
('Juan Pérez', 'juan.perez@example.com', '1234', 'cliente', 100), -- 100 minutos disponibles
('Ana Rodríguez', 'ana.rodriguez@example.com', '1234', 'cliente', 50),  -- 50 minutos disponibles
('Carlos Gómez', 'carlos.gomez@example.com', '1234', 'traductor', 0), -- Traductor sin minutos
('Admin', 'admin@example.com', 'adminpass', 'administrador', 0); -- Administrador sin minutos

-- Insertar datos en la tabla de traductores
INSERT INTO traductores (nombre, especialidad, disponibilidad)
VALUES
('María López', 'LESC', 'disponible'),
('Pedro Sánchez', 'LESC', 'ocupado');

-- Hacer un traductor para el usuario de Carlos Gómez
INSERT INTO traductores (id_traductor, nombre, especialidad, disponibilidad)
VALUES
(3, 'Carlos Gómez', 'LESC', 'disponible');

-- Borrar el traductor de María porque no tiene un usuario asociado
DELETE FROM traductores WHERE id_traductor = 1;

-- Insertar datos de videollamadas
INSERT INTO videollamadas (id_cliente, id_traductor, duracion, estado)
VALUES
(1, 2, 30, 'completada'),
(2, 2, 45, 'cancelada');

-- Insertar datos de evaluaciones
INSERT INTO evaluaciones (id_traductor, id_cliente, calificacion, comentario)
VALUES
(2, 1, 5, 'Excelente servicio'),
(2, 2, 4, 'Muy bueno, pero podría mejorar en puntualidad');

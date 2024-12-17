-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS lesco_project;
USE lesco_project;

--  la tabla de usuarios
CREATE TABLE usuarios (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) UNIQUE NOT NULL,
    contrasena VARCHAR(255) NOT NULL,
    tipo_usuario ENUM('cliente', 'traductor', 'administrador') NOT NULL,
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

--  la tabla de traductores
CREATE TABLE traductores (
    id_traductor INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    especialidad VARCHAR(100) NOT NULL,
    disponibilidad ENUM('disponible', 'ocupado') DEFAULT 'disponible',
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

--  la tabla de videollamadas
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


-- la tabla de evaluaciones de traductores
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

--  la tabla de historial de llamadas
CREATE TABLE historial_llamadas (
    id_historial INT AUTO_INCREMENT PRIMARY KEY,
    id_cliente INT NOT NULL,
    id_traductor INT NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_cliente) REFERENCES usuarios(id_usuario) ON DELETE CASCADE,
    FOREIGN KEY (id_traductor) REFERENCES traductores(id_traductor) ON DELETE CASCADE
);

-- Insertar datos de prueba
INSERT INTO usuarios (nombre, correo, contrasena, tipo_usuario)
VALUES
('Juan Pérez', 'juan.perez@example.com', '1234', 'cliente'),
('Ana Rodríguez', 'ana.rodriguez@example.com', '1234', 'cliente'),
('Carlos Gómez', 'carlos.gomez@example.com', '1234', 'traductor'),
('Admin', 'admin@example.com', 'adminpass', 'administrador');

INSERT INTO traductores (nombre, especialidad, disponibilidad)
VALUES
('María López', 'LESC', 'disponible'),
('Pedro Sánchez', 'LESC', 'ocupado');

# HACIENDO UN TRADUCTOR PARA EL USUARIO DE CARLOS GOMEZ, TODOS LOS TRADUCTORES DEBERIAN DE TENER UN USUARIO CON LA MISMA ID
INSERT INTO traductores (id_traductor, nombre, especialidad, disponibilidad)
VALUES
(3, 'Carlos Gómez', 'LESC', 'disponible');


# BORRANDO EL TRADUCTOR DE MARIA PORQUE NO TIENE UN USUARIO, TODOS LOS TRADUCTORES DEBERIAN DE TENER UN USUARIO CON LA MISMA ID
DELETE FROM traductores WHERE id_traductor = 1;


INSERT INTO videollamadas (id_cliente, id_traductor, duracion, estado)
VALUES
(1, 2, 30, 'completada'),
(2, 2, 45, 'cancelada');

INSERT INTO evaluaciones (id_traductor, id_cliente, calificacion, comentario)
VALUES
(2, 1, 5, 'Excelente servicio'),
(2, 2, 4, 'Muy bueno, pero podría mejorar en puntualidad');

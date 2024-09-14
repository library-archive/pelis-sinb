CREATE TABLE planes_subscripcion (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(50),
  precio DECIMAL(10, 2),
  duracion_dias INT
);

CREATE TABLE usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre_usuario VARCHAR(100),
  correo VARCHAR(100),
  password_hash VARCHAR(255),
  id_plan INT,
  fecha_suscripcion DATE,
  FOREIGN KEY (id_plan) REFERENCES planes_subscripcion(id)
);

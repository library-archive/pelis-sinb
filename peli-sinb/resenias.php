CREATE TABLE resenas (
  id INT AUTO_INCREMENT PRIMARY KEY,
  id_pelicula INT,
  id_usuario INT,
  comentario TEXT,
  puntuacion INT,
  fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (id_pelicula) REFERENCES peliculas(id),
  FOREIGN KEY (id_usuario) REFERENCES usuarios(id)
);

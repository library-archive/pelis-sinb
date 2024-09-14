require 'config.php';

if ($_POST) {
  $id_pelicula = $_POST['id_pelicula'];
  $id_usuario = $_SESSION['usuario_id']; // Asumiendo que el usuario ha iniciado sesión
  $comentario = $_POST['comentario'];
  $puntuacion = $_POST['puntuacion'];

  // Insertar la reseña en la base de datos
  $sql = "INSERT INTO resenas (id_pelicula, id_usuario, comentario, puntuacion) VALUES (?, ?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("iisi", $id_pelicula, $id_usuario, $comentario, $puntuacion);
  $stmt->execute();

  echo "Reseña agregada exitosamente!";
}

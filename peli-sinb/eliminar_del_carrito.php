require 'config.php';

if ($_POST) {
  $id_pelicula = $_POST['id_pelicula'];
  $usuario_id = $_SESSION['usuario_id'];

  $sql = "DELETE FROM carrito WHERE id_pelicula = ? AND usuario_id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ii", $id_pelicula, $usuario_id);
  $stmt->execute();

  echo "Artículo eliminado del carrito!";
}

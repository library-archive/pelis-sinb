require 'config.php';

if ($_POST) {
  $id_pelicula = $_POST['id_pelicula'];
  $cantidad = $_POST['cantidad'];
  $usuario_id = $_SESSION['usuario_id'];

  $sql = "UPDATE carrito SET cantidad = ? WHERE id_pelicula = ? AND usuario_id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("iii", $cantidad, $id_pelicula, $usuario_id);
  $stmt->execute();

  echo "Cantidad actualizada!";
}

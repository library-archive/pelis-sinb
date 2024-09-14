require 'config.php';

if ($_POST) {
  $usuario_id = $_SESSION['usuario_id'];
  $pelicula_id = $_POST['pelicula_id'];

  // Insertar la película en el carrito
  $sql = "INSERT INTO carrito (usuario_id, pelicula_id) VALUES (?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ii", $usuario_id, $pelicula_id);
  $stmt->execute();

  echo "Película agregada al carrito!";
}

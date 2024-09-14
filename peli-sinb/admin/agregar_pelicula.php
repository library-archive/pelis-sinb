require 'config.php';

if ($_POST) {
  $titulo = $_POST['titulo'];
  $descripcion = $_POST['descripcion'];
  $precio = $_POST['precio'];
  
  // Subir la imagen de la película
  $portada = 'uploads/' . basename($_FILES['portada']['name']);
  move_uploaded_file($_FILES['portada']['tmp_name'], $portada);

  // Insertar en la base de datos
  $sql = "INSERT INTO peliculas (titulo, descripcion, portada, precio) VALUES (?, ?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sssd", $titulo, $descripcion, $portada, $precio);
  $stmt->execute();

  echo "Película agregada exitosamente!";
}

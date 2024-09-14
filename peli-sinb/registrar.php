require 'config.php';

if ($_POST) {
  $usuario = $_POST['usuario'];
  $correo = $_POST['correo'];
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

  // Insertar el nuevo usuario
  $sql = "INSERT INTO usuarios (nombre_usuario, correo, password_hash) VALUES (?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sss", $usuario, $correo, $password);
  $stmt->execute();

  echo "Usuario registrado exitosamente!";
}

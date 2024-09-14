require 'config.php'; // Conexión a la base de datos

if ($_POST) {
  $id_usuario = $_SESSION['usuario_id'];
  $plan = $_POST['plan'];
  $fecha_actual = date('Y-m-d');

  // Actualiza el plan del usuario
  $sql = "UPDATE usuarios SET id_plan = ?, fecha_suscripcion = ? WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("isi", $plan, $fecha_actual, $id_usuario);
  $stmt->execute();
  
  echo "Te has suscrito exitosamente!";
}

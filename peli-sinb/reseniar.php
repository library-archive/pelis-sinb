$sql = "SELECT u.nombre_usuario, r.comentario, r.puntuacion, r.fecha 
        FROM resenas r 
        JOIN usuarios u ON r.id_usuario = u.id 
        WHERE r.id_pelicula = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id_pelicula); // $id_pelicula es el ID de la película actual
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
  echo "<div class='resena'>";
  echo "<h4>" . $row['nombre_usuario'] . " (Puntuación: " . $row['puntuacion'] . "/5)</h4>";
  echo "<p>" . $row['comentario'] . "</p>";
  echo "<small>" . $row['fecha'] . "</small>";
  echo "</div>";
}

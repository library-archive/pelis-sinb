<form action="actualizar_carrito.php" method="POST">
  <input type="hidden" name="id_pelicula" value="<?php echo $pelicula_id; ?>">
  <input type="number" name="cantidad" value="<?php echo $cantidad; ?>" min="1">
  <input type="submit" value="Actualizar Cantidad">
</form>

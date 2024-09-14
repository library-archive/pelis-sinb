require 'vendor/autoload.php'; // Si usas Composer

\Stripe\Stripe::setApiKey('tu_clave_secreta');

if ($_POST) {
   // Obtener el token de Stripe generado por el checkout.js
   $token = $_POST['stripeToken'];

   // Crear el cargo
   try {
      $cargo = \Stripe\Charge::create([
         'amount' => 5000,  // Monto en centavos
         'currency' => 'usd',  // Moneda
         'description' => 'Alquiler de Películas en Peli-sinb',
         'source' => $token,
      ]);

      // Aquí puedes guardar el resultado en la base de datos
      echo "Pago exitoso";
   } catch (\Stripe\Exception\CardException $e) {
      echo "Error en el pago: " . $e->getMessage();
   }
}

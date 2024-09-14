require 'stripe-php/init.php';

\Stripe\Stripe::setApiKey('tu_clave_privada_de_stripe');

$session = \Stripe\Checkout\Session::create([
  'payment_method_types' => ['card'],
  'line_items' => [[
    'price_data' => [
      'currency' => 'usd',
      'product_data' => [
        'name' => 'Película Ejemplo',
      ],
      'unit_amount' => 999, // Precio en centavos (ej. $9.99)
    ],
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => 'https://tusitio.com/exito',
  'cancel_url' => 'https://tusitio.com/cancelado',
]);

header("Location: " . $session->url);

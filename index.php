<?php
require_once __DIR__ . '/session.php';
require_once __DIR__ . '/functions.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password generator</title>
</head>

<body>
  <!-- FORM -->
  <form action="index.php" method="get">
    <label for="length">Scegli la lunghezza della password</label>
    <input type="number" name="length" placeholder="lunghezza" id="length">
    <button type="submit">Invia</button>
  </form>
  <!-- VERIFICA INSERIMENTO LUNGHEZZA -->
  <?php if ($password) : ?>
    <h2>Password generata: </h2>
    <p><?php echo $password; ?></p>
  <?php else : ?>
    <h3>Inserisci una lunghezza valida</h3>
  <?php endif; ?>
</body>

</html>
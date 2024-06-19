<?php

// LENGTH INSERITA IN INPUT
$length = $_GET['length'];

// FUNZIONE GENERA PASSWORD
function generatePassword($length)
{
  $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|;:,.<>?';
  $password = '';
  // CHARACTERSLENGTH VERRà UTILIZZATO COME VALORE MASSIMO PER PRENDERE UN CARATTERE CASUALE
  $charactersLength = strlen($characters);
  for ($i = 0; $i < $length; $i++) {
    $password .= $characters[rand(0, $charactersLength - 1)];
  }
  return $password;
};

if ($length > 0) {
  $password = generatePassword($length);
}

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
    <input type="number" placeholder="lunghezza" id="length">
    <button>Invia</button>
  </form>
  <h2>Password generata: </h2>
  <p><?php echo $password ?></p>
</body>

</html>
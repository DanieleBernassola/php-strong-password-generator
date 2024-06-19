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

if (isset($_GET['length'])) {
  if ($length > 0) {
    $password = generatePassword($length);
  }
}

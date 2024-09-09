<?php
function generateRandomString($password_length)
{
  $password_length = $_GET['lunghezza_password'];
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!?&%$<>^+-*/()[]{}@#_=';
  $charactersLength = strlen($characters);
  $randomString = '';
  if (isset($_GET['lunghezza_password'])) {
    for ($i = 0; $i < $password_length; $i++) {
      $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
  } else {
    $randomString = '';
  }
  return $randomString;
}
?>
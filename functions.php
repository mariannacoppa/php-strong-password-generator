<?php 
// funzione di controllo dell'input
function checkParameter($param)
{
  // se i caratteri non sono numerici, compare avviso 
  if (!is_numeric($_GET['length']) || $_GET['length'] == '') {
    return 'Devi inserire un valore numerico';
  }
  // se il numero inserito è inferiore a 6, compare messaggio 
  if ($_GET['length'] < 6) {
    return 'Devi inserire un numero maggiore o uguale a 6';
  }
  if (is_numeric($_GET['length']) && $_GET['length'] >= 6) {
    return true;
  }
}

// funzione che genera la password
function generateRandomPassword($param) {
  // creo la stringa contenente i caratteri utilizzabili per la password
  $baseString = 'abcdefghijklmnopqrstuvwxyz' . strtoupper('abcdefghijklmnopqrstuvwxyz') . '0123456789!?&%$<>^+-*/()[]{}@#_=';
  // recupero un carattere randomico dalla variabile contentente i caratteri utilizzabili
  $slices = str_split($baseString);
  $randomChar = rand(0, count($slices) - 1);
  // definisco una stringa vuota atta a contenere i caratteri della passsword
  $password = '';
  // creo un ciclo per appendere il carattere random alla stringa vuota
  while (strlen($password) < $_GET['length']) {
    // creo un numero random compreso tra 0 e la lunghezza della stringa
    $randomChar = rand(0, count($slices) - 1);
    // appendo il numero alla stringa vuota
    $password .= $baseString[$randomChar];
  }
  return $password;
}


?>
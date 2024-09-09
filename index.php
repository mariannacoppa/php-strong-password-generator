<?php
function checkParameter($param){
  // se i caratteri non sono numerici, compare avviso 
  if(!is_numeric($_GET['length'])){
    return 'Devi inserire un valore numerico';
  }
  // se il numero inserito è inferiore a 6, compare messaggio 
  if($_GET['length'] < 6){
    return 'Devi inserire un numero maggiore o uguale a 6';
  }
  if(is_numeric($_GET['length']) && $_GET['length'] >= 6){
    return true;
  }
}

// verifico che sia stata compiata la form
if(isset($_GET['length']) && $_GET['length'] != ''){
  // richiamo la funzione e assegno il valore restituito alla variabile check
  $check = checkParameter($_GET['length']);
  // se il valore è true restituisco la password
  if($check === true){

  }
  //altrimenti assegno il valore restituito in una variabile correlata a messaggio
  else{
    $message = $check;
  }
}
// imposto la condizione per cui i caratteri devono essere diversi da null, da stringa vuota e numerici
  if(isset($_GET['length']) && is_numeric($_GET['length']) && $_GET['length'] != ''){
    // se i caratteri non sono numerici, compare avviso 
    if(!is_numeric($_GET['length'])){
      $message = 'Devi inserire un valore numerico';
    }
    // se il numero inserito è inferiore a 6, compare messaggio 
    if($_GET['length'] < 6){
      $message = 'Devi inserire un numero maggiore o uguale a 6';
    }
    // creo la stringa contenente i caratteri utilizzabili per la password
    $baseString = 'abcdefghijklmnopqrstuvwxyz'.strtoupper('abcdefghijklmnopqrstuvwxyz').'0123456789!?&%$<>^+-*/()[]{}@#_=';
    // recupero un carattere randomico dalla variabile contentente i caratteri utilizzabili
    $slices = str_split($baseString);
    $randomChar = rand(0, count($slices) - 1);
    
    // definisco una stringa vuota atta a contenere i caratteri della passsword
    $password = '';
    // creo un ciclo per appendere il carattere random alla stringa vuota
    while(strlen($password) < $_GET['length']){
      // creo un numero random compreso tra 0 e la lunghezza della stringa
      $randomChar = rand(0, count($slices) - 1);
      // appendo il numero alla stringa vuota
      $password .= $baseString[$randomChar];
    } 
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>php-strong-password-generator</title>
</head>
<body>
    <div class="container mt-5">
      <div class="row">
        <div class="col-12">
          <div class="form-container bg-dark d-flex justify-content-center p-2 rounded-4">
            <form action="./index.php" method="get">
              <div class="row">
                <div class="col-12 col-md-6">
                  <h1 class="text-primary text-center my-2">PHP Strong Password Generator</h1>
                  <label for="" class="control-label text-light mt-5">Inserisci il numero di cifre della password</label>
                  <!-- se la cifra è < 6, compare avviso -->
                  <input type="number" min="6" name="length" id="length" class="form-control form-control-sm my-4 col-md-6" placeholder="Lunghezza della password">
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-sm btn-primary text-center mb-5">Crea</button>
                </div>
                <!-- stampo la password generata -->
                <div class="col-12 text-center">
                  <?php if(isset($check) && $check !== true) { ?>
                    <h2 class="text-danger"><?php echo $message; ?></h2>
                  <?php } ?>
                  <?php if(isset($password)) { ?>
                    <h2 class="text-success"><?php echo $password; ?></h2>
                  <?php } ?>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
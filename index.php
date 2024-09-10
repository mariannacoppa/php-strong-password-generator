<?php
include './functions.php';

// verifico che sia stata compilata la form
if (isset($_GET['length'])) { //&& $_GET['length'] != '') {
  // richiamo la funzione e assegno il valore restituito alla variabile check
  $check = checkParameter($_GET['length']);
  // se il valore è true restituisco la password
  if ($check === true) {
    $password = generateRandomPassword($_GET['length']);

    session_start();
    $_SESSION['password'] = $password;

    header('Location: success.php');
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
                <?php if (isset($check) && $check !== true) { ?>
                  <h2 class="text-danger"><?php echo $check; ?></h2>
                <?php } ?>
                <?php if (isset($password)) { ?>
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
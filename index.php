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
          <div class="form-container bg-secondary d-flex justify-content-center">
            <form action="./index.php" method="get">
              <div class="row">
                <div class="col-12">
                  <label for="" class="control-label text-light mt-5">Inserisci il numero di cifre della password</label>
                  <input type="number" name="length" id="length" class="form-control form-control-sm my-4" placeholder="lunghezza della password">
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-sm btn-primary text-center mb-5">Crea</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
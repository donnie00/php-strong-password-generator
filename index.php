<?php
include './function.php';
?>

<!DOCTYPE html>
<html lang="it">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Password Generator</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body class="text-bg-dark">
   <main class="container py-3">

      <h1 class="text-success">Random Password generator</h1>

      <form class="my-3 row" action="">
         <div class="col">
            <label class="form-label" for="length">Insert password length:</label>
            <input class="form-control" type="number" min="3" name="length" placeholder="Length">
         </div>

         <div class="col">
            <div class="form-check">
               <input class="form-check-input" type="checkbox" name="lowercase">
               <label class="form-check-label" for="lowercase">Lowercase letters</label>
            </div>

            <div class="fomr-check">
               <input class="form-check-input" type="checkbox" name="uppercase">
               <label class="form-check-label" for="lowercase">Uppercase letters</label>
            </div>

            <div class="form-check">
               <input class="form-check-input" type="checkbox" name="numbers">
               <label class="form-check-label" for="lowercase">Numbers</label>
            </div>

            <div class="form-check">
               <input class="form-check-input" type="checkbox" name="symbols">
               <label class="form-check-label" for="lowercase">Symbols</label>
            </div>
         </div>

         <div class="col">
            <div class="form-check">
               <input class="form-check-input" type="checkbox" name="charRepetition">
               <label class="form-check-label" for="charRepetition">
                  Allow same character repetition?
               </label>
            </div>
         </div>

      </form>
   </main>
</body>

</html>
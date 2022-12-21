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

      <h1>Random Password generator</h1>

      <form class="my-3" action="">
         <label class="form-label" for="length">Insert password length:</label>
         <input class="form-control" type="number" min="3" name="length" placeholder="Length">

      </form>

      <div class="text-center">
         <?php if (isset($length) && $length != '') : ?>
            <h2>Your password is:
               <small class="text-muted"><?php echo $passwordGenerator($length, $mergedArray) ?? '~' ?></small>
            <?php else : ?>
               <h2>Nessuna password da mostrare, inserisci la lunghezza per generarla!</h2>
            <?php endif ?>
            </h2>
      </div>

   </main>
</body>

</html>
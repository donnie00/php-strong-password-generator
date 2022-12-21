<?php
session_start();

// include './logout.php';

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
   <div class="container">
      <div class="text-center mt-5">
         <?php { ?>
            <h2 class="display-3">Your password is:
               <p class="text-muted py-5"><?php echo $_SESSION['password'] ?></p>
            <?php } ?>
            </h2>
      </div>
   </div>
</body>

</html>
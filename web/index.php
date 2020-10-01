<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />    
    <title>bdb64</title>
    <style>
      h2 {
        font-size: 4vw;
        word-wrap: break-word;
      }
    </style>
  </head>
  <body>
  <?php
      if (isset($_GET["decode"])) {
        echo "<h2>" . htmlspecialchars(base64_decode($_GET["decode"])) . "</h2>";
      } elseif (isset($_GET["encode"])) {
        echo "<h2>" . htmlspecialchars(base64_encode($_GET["encode"])) . "</h2>";
      }
  ?></body>
</html>

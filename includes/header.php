<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../style/header.css">
    <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <header style="">
      <h1>E-Caffe System
        <p>  <?php

          session_start();
          if (isset($_SESSION['login_user'])) {
            echo $_SESSION['login_user'];
          }
           ?></p>
      </h1>
      <a id='odjava' href="../index.php?akcija=odjava">Odjavi se</a>





    </header>
  </body>
</html>

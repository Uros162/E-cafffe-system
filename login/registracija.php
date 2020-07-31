<?php


  include '../includes/konekcija.php';

    if ($_POST) {
      $username = mysqli_real_escape_string($conn,$_POST['username']);
      $password = mysqli_real_escape_string($conn,$_POST['password']);

      if ($_POST['korisnicki_nivo'] == 'admin') {
        $korisnicki_nivo = 1;
      }elseif ($_POST['korisnicki_nivo'] == 'konobar') {
        $korisnicki_nivo = 2;
      }else {
        $korisnicki_nivo = 3;
      }

      $sql = "INSERT INTO korisnik(korisnicko_ime,password,korisnicki_nivo)
      VALUES ('$username','$password','$korisnicki_nivo')";




      if ($conn->query($sql)===FALSE) {

        echo "nevalja". $sql . "<br>" . $conn->error;
      }
    }





 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Prijavljivanje</title>
    <link rel="stylesheet" href="../style/registracija.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
      <link href="https://fonts.googleapis.com/css?family=Slabo+27px&display=swap" rel="stylesheet">

      <script src='../js/kafic11.js'>

      </script>
    </head>
  <body>


    <div class="black">


    <form method="post" onsubmit="return proveriRegistraciju()">
      <h1>Registruj se</h1>

       <div class="textbox">
         <i class="fas fa-user"></i>
         <input  type="text" name="username" value="" id='username' placeholder="Unesi korisnicko ime" >
       </div>
       <div class="textbox">
         <i class="fas fa-lock"></i>
         <input type="password" name="password" value="" id='password' placeholder="unesi lozinku"  >
       </div>

       <div class="textbox">
         <i class="fas fa-lock"></i>
         <input type="password" name="repeatPassword" value="" id='repeatPassword' placeholder="potvrdi lozinku">
       </div>

       <select class="korisnicki_nivo" name="korisnicki_nivo">
         <option value="admin">admin</option>
         <option value="konobar">konobar</option>
         <option value="sanker">sanker</option>

       </select><br>
       <button type="submit" name="button">Potvrdi</button>
    </form>
</div>


  </body>
</html>

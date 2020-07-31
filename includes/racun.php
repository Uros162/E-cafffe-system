<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>E-caffe racun</title>
    <link rel="stylesheet" href="../style/racun1.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
  </head>
  <body>
    <?php include 'header.php'; ?>
    <div class="racun">
      <?php
      include 'ispisivanje.php';

      ?>
      <?php
      include 'konekcija.php';
      $id = $_SESSION['login_user_id'];
      $sql = "INSERT INTO narudzbina(korisnici_id,cena,sadrzaj_narudzbine)
      VALUES ('$id','$suma','$ispis')";


      if ($conn->query($sql)===FALSE) {

        echo "nevalja". $sql . "<br>" . $conn->error;
      }

      $conn->close();
       ?>

      <div class="datum">
        <span><?php echo date('d M Y  ,H:i'); ?></span>
      </div>
      <div class="cena">
        <?php echo $suma." rsd" ?>
      </div>
    </div>
  </body>
</html>

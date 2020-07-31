
 <?php include 'header.php'; ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <link href="https://fonts.googleapis.com/css?family=Slabo+27px&display=swap" rel="stylesheet">
   </head>
   <style>
   body{
     background: url('../images/pod.jpeg');
     background-size: cover;
     min-height:100vh;
     font-family: 'Slabo 27px', serif;
    }
   table{
     border: 3px solid white;
     border-collapse: collapse;
     margin: auto;
     width: 70%;
   }
   table tr th{
     border: 1px solid white;
     padding: 4px;
     background: yellow;
     height: 30px;
   }
   table tr td{
     height: 15px;
     padding: 4px;
     color: white;
   }
   table tr:nth-child(odd) td{
     background: #1165B880;
     margin-top: 30px;
   }
   form a{
     margin: 20px;
     border: 2px solid #1165B8;

     background: yellow;
     transition: 0.25s;
     width:1vw;
     height: 10vh;
     text-decoration: none;

   }
   form a:hover{
    color: white;
   }

   </style>
   <body>
   <form  method="post">
      <select class="" name="konobar">
        <?php
        include 'konekcija.php';
        $sql = "SELECT korisnicko_ime FROM korisnik WHERE korisnicki_nivo = 2" ;
        $result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);
        while($row = $result->fetch_assoc()){
                        // dropdown za konobara
              echo "<option " ;
              if( isset($_POST['konobar']) && $_POST['konobar'] == $row['korisnicko_ime']){
                echo"selected";
              }
              echo '>'.$row['korisnicko_ime']."</option>";
        }
        ?>
      </select>
      <select name='mesec'>
      <?php
         echo"<option selected>mesec</option>";
         for ($i = 1; $i <= 12; $i++){
           $month = ($i < 10) ? '0'.$i : $i;                            // drop down za mesec
           echo '<option value="'.$month.'"';
           if( isset($_POST['mesec']) && $_POST['mesec'] == $month){
             echo"selected";
           }
           echo '>'.$month.'</option>';}
         ?>
         </select>


       <select  name="godina">                                        <!--  drop down za mesec -->
        <option  selected>godina</option>
        <option <?php if( isset($_POST['godina']) && $_POST['godina'] == '2019'){
          echo"selected";
        } ?> >2019</option>
        <option <?php if( isset($_POST['godina']) && $_POST['godina'] == '2020'){
          echo"selected";
        } ?>>2020</option>
      </select>

      <input type="submit" name="trazi" value="trazi">
      <?php
      if (isset($_POST['konobar'])){
      if ($_POST['godina']!='godina' && $_POST['mesec']!='mesec') {
          $selectedKonobar = $_POST['konobar'];
          $godina = $_POST['godina'];
          $mesec = $_POST['mesec'];
          $sledeci = $mesec+1;
          $sledeca = $godina +1;
          if ($sledeci == 13) {
            $sledeci = 1;
            $sql1 = "SELECT korisnicko_ime,cena,sadrzaj_narudzbine,naruceno_u FROM korisnik,narudzbina
                      WHERE korisnik.korisnici_id = narudzbina.korisnici_id AND
                      korisnik.korisnicko_ime = '$selectedKonobar' AND naruceno_u BETWEEN
                      '$godina-$mesec-01' AND '$sledeca-$sledeci-01'";
          }else{
          $sql1 = "SELECT korisnicko_ime,cena,sadrzaj_narudzbine,naruceno_u FROM korisnik,narudzbina
                  WHERE korisnik.korisnici_id = narudzbina.korisnici_id AND
                  korisnik.korisnicko_ime = '$selectedKonobar' AND naruceno_u BETWEEN
                  '$godina-$mesec-01' AND '$godina-$sledeci-01'";
        }
      }else{
          $selectedKonobar1 = $_POST['konobar'];
          $sql1 = "SELECT korisnicko_ime,cena,sadrzaj_narudzbine,naruceno_u FROM korisnik,narudzbina
                  WHERE korisnik.korisnici_id = narudzbina.korisnici_id AND
                  korisnik.korisnicko_ime = '$selectedKonobar1'";
        }

        $res =  mysqli_query($conn, $sql1);
        $broj_redova = mysqli_num_rows($res);
        $rezultata_po_stranici = 2;
        $broj_stranica = ceil($broj_redova/$rezultata_po_stranici);

        if (!isset($_GET['page'])) {
          $stranica = 1;
        }else{
          $stranica = $_GET['page'];

        }

        $limit = ($stranica-1)*$rezultata_po_stranici;
        $sql1 = $sql1."LIMIT $limit,$rezultata_po_stranici ";

        echo $sql1;
        if($result1 = mysqli_query($conn, $sql1)){
          if(mysqli_num_rows($result1) > 0){
            echo "<table>";
            echo "<tr>";
              echo "<th>konobar</th>";
              echo "<th>cena</th>";
              echo "<th>sadrzaj narudbine</th>";
              echo "<th>vreme narudzbine</th>";
          echo "</tr>";
          while ($row1 = mysqli_fetch_array($result1)) {
            echo "<tr>";
            echo "<td>" . $row1['korisnicko_ime'] . "</td>";
            echo "<td>" . $row1['cena'] . "</td>";
            echo "<td>" . $row1['sadrzaj_narudzbine'] . "</td>";
            echo "<td>" . $row1['naruceno_u'] . "</td>";
            echo "</tr>";
          }
          echo "<tr>";
              echo "<td>suma</td>";
              echo "<td colspan='3'>".$row1['suma']."</td>";
          echo "</tr>";
          echo "</table>";
          echo $row1['suma'];


for ($stranica=1; $stranica <= $broj_stranica; $stranica++) {
  echo '<a  href="izvestaji.php?page='.$stranica.'"a>'. $stranica .'</a>';
}

      mysqli_free_result($result1);
    }else{
      echo "Nema trazenih informacija za unete parametre";
    }
  }else{
    echo "Greska: Upit ne moze da se izvrsi $sql1. " . mysqli_error($conn);
  }
}else{
  echo"Unesite parametre za pretragu";
}


mysqli_close($conn);
?>


      </form>
   </body>
 </html>

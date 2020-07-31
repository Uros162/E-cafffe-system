<?php
   include "./includes/konekcija.php";

   if($_SERVER["REQUEST_METHOD"] == "POST") {

      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']);

      $sql = "SELECT * FROM korisnik WHERE korisnicko_ime = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result);
      $count = mysqli_num_rows($result);

      if($count == 1) {

         $_SESSION['login_user'] = $myusername;
         $_SESSION['login_user_id'] = $row['korisnici_id'];

         if ($row['korisnicki_nivo'] == 1) {
           ajax_idi_na_stranicu('./includes/admin.php');
         }else if($row['korisnicki_nivo'] == 2){
           ajax_idi_na_stranicu('./includes/konobar.php');
         }else if($row['korisnicki_nivo'] == 3){
           ajax_idi_na_stranicu('./includes/sank.php');
         }
   }else{
     ajax_poruka('Niste dobro uneli korisničko ime ili lozinku');
   }
 }
?>

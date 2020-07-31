<?php
  header('Content-Type: text/html; charset=utf-8');

  $ime_kukija = 'e-caffe';

  session_start();

  $sesion_id = session_id();

  include('login/funkcije.php');

  proveri_sesiju();

  $akcija = $_GET['akcija'] ?? '';

  if(!empty($_GET) && !$akcija) idi_na_stranicu('login/error404.html');
  else if ($akcija)
  {
  switch ($akcija)
   {
    case 'prijava':

      if ($_POST) {
        include('login/login.php');
      }

      if ($_SESSION['ulogovan']) {
        include('login/ulogovan.html');
      }else{
        include 'login/prijava.html';
      }
      break;
    case 'odjava':
      $_SESSION['ulogovan']=0;

      idi_na_stranicu('index.php');

      break;
    default:
      idi_na_stranicu('login/error404.html');
      break;
  }
  }
  else if ($_SESSION['ulogovan'] ?? '')
  {
  	include('login/ulogovan.html');
  }
  /* Korisnik nije prijavljen */
  else
  {
  	include('login/neulogovan.html');
  }

 ?>

<?php
  function proveri_sesiju(){
    global $ime_kukija, $sesion_id;

    if (!$_COOKIE['PHPSESSID']) {
      zapocni_sesiju($sesion_id);
    }
  }

  function zapocni_sesiju($sesion_id){

    $_SESSION['id'] = $_SERVER[SERVER_NAME];
    $_SESSION['server_addr'] = $_SERVER[SERVER_ADDR];
    $_SESSION['server_port'] = $_SERVER[SERVER_PORT];
    $_SESSION['remote_addr'] = $_SERVER[REMOTE_ADDR];

    $_SESSION['ulogovan'] = 0;
  }

  function ajax_poruka($poruka){
    	echo '<script language="javascript" type="text/javascript">alert("'.$poruka.'")</script>';
      exit;
  }

  function ajax_idi_na_stranicu($stranica)
  {

  	echo '<script language="javascript" type="text/javascript">window.top.location="'.$stranica.'";</script>';

  	exit;
  }

  function idi_na_stranicu($stranica)
  {

  	header("location: ./$stranica");

  	exit;
  }
 ?>

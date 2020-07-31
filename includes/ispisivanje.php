<?php
$ispis;
$ispis = '';
$suma = 0;
if(isset($_POST['kokakola'])){
  if(isset($_POST['nkokakola'])){
    $kolicina = $_POST['nkokakola'];
    echo "kokakola  ".$kolicina." cena ".$kolicina*150 ."<br><br>";
    $suma+=$kolicina*150 ;

    $ispis .= "kokakola  ".$kolicina." cena ".$kolicina*150.;

  }

}
if(isset($_POST['sweps'])){
  if(isset($_POST['nsweps'])){
    $kolicina = $_POST['nsweps'];
    echo "sweps  ".$kolicina." cena ".$kolicina*160 ."<br><br>";
    $suma+=$kolicina*160 ;

    $ispis .= "sweps  ".$kolicina." cena ".$kolicina*160;
  }

}

if(isset($_POST['nextsok'])){
  if(isset($_POST['nnextsok'])){
    $kolicina = $_POST['nnextsok'];
    echo "nextsok  ".$kolicina." cena ".$kolicina*150 ."<br><br>";
    $suma+=$kolicina*150 ;

    $ispis .= "next sok ".$kolicina." cena ".$kolicina*150;
  }

}
if(isset($_POST['cedevita'])){
  if(isset($_POST['ncedevita'])){
    $kolicina = $_POST['ncedevita'];
    echo "nextsok  ".$kolicina." cena ".$kolicina*150 ."<br><br>";
    $suma+=$kolicina*150 ;

    $ispis .= "cedevita  ".$kolicina." cena ".$kolicina*150;
  }

}
if(isset($_POST['sprite'])){
  if(isset($_POST['nsprite'])){
    $kolicina = $_POST['nsprite'];
    echo "sprite  ".$kolicina." cena ".$kolicina*150 ."<br><br>";
    $suma+=$kolicina*150 ;

    $ispis .= "sprite  ".$kolicina." cena ".$kolicina*150;
  }

}

if(isset($_POST['pivo'])){
  if(isset($_POST['npivo'])){
    $kolicina = $_POST['npivo'];
    echo "pivo ".$kolicina." cena ".$kolicina*175 ."<br><br>";
    $suma+=$kolicina*175 ;

    $ispis .= "pivo  ".$kolicina." cena ".$kolicina*175;
  }

}
if(isset($_POST['vino'])){
  if(isset($_POST['nvino'])){
    $kolicina = $_POST['nvino'];
    echo "vino  ".$kolicina." cena ".$kolicina*230  . "<br><br>";
    $suma+=$kolicina*230 ;

    $ispis .= "vino  ".$kolicina." cena ".$kolicina*230;
  }

}
if(isset($_POST['rakija'])){
  if(isset($_POST['nrakija'])){
    $kolicina = $_POST['nrakija'];
    echo "rakija  ".$kolicina." cena ".$kolicina*120 ."<br><br>";
    $suma+=$kolicina*120 ;

    $ispis .= "rakija  ".$kolicina." cena ".$kolicina*120;
  }

}

if(isset($_POST['viski'])){
  if(isset($_POST['nviski'])){
    $kolicina = $_POST['nviski'];
    echo "viski  ".$kolicina." cena ".$kolicina*380 ."<br><br>";
    $suma+=$kolicina*380 ;

    $ispis .= "viski  ".$kolicina." cena ".$kolicina*380;
  }

}
if(isset($_POST['kokteli'])){
  if(isset($_POST['nkokteli'])){
    $kolicina = $_POST['nkokteli'];
    echo "kokteli  ".$kolicina." cena ".$kolicina*400 ."<br><br>";
    $suma+=$kolicina*400 ;

    $ispis .= "kokteli  ".$kolicina." cena ".$kolicina*400;
  }

}

if(isset($_POST['caj'])){
  if(isset($_POST['ncaj'])){
    $kolicina = $_POST['ncaj'];
    echo "caj  ".$kolicina." cena ".$kolicina*100 ."<br><br>";
    $suma+=$kolicina*100 ;

    $ispis .= "caj  ".$kolicina." cena ".$kolicina*100;
  }

}

if(isset($_POST['kapucino'])){
  if(isset($_POST['nkapucino'])){
    $kolicina = $_POST['nkapucino'];
    echo "kapucino  ".$kolicina." cena ".$kolicina*135 ."<br><br>";
    $suma+=$kolicina*135 ;

    $ispis .= "kapucino  ".$kolicina." cena ".$kolicina*135;
  }

}
if(isset($_POST['exspreso'])){
  if(isset($_POST['nexspreso'])){
    $kolicina = $_POST['nexspreso'];
    echo "exspreso  ".$kolicina." cena ".$kolicina*145 ."<br><br>";
    $suma+=$kolicina*145 ;

    $ispis .= "exspreso  ".$kolicina." cena ".$kolicina*145;
  }

}

if(isset($_POST['topla_cokoloda'])){
  if(isset($_POST['ntopla_cokoloda'])){
    $kolicina = $_POST['ntopla_cokoloda'];
    echo "topla cokoloda  ".$kolicina." cena ".$kolicina*205 ."<br><br>";
    $suma+=$kolicina*205 ;

    $ispis .= "topla cokoloda  ".$kolicina." cena ".$kolicina*205;
  }

}
if(isset($_POST['late'])){
  if(isset($_POST['nlate'])){
    $kolicina = $_POST['nlate'];
    echo "late  ".$kolicina." cena ".$kolicina*195 ."<br><br>";
    $suma+=$kolicina*195 ;

    $ispis .= "late  ".$kolicina." cena ".$kolicina*195;
  }

}

if(isset($_POST['plazmasejk'])){
  if(isset($_POST['nplazmasejk'])){
    $kolicina = $_POST['nplazmasejk'];
    echo "plazmasejk  ".$kolicina." cena ".$kolicina*365 ."<br><br>";
    $suma+=$kolicina*365 ;

    $ispis .= "plazmasejk  ".$kolicina." cena ".$kolicina*365;
  }

}

if(isset($_POST['jagodasejk'])){
  if(isset($_POST['njagodasejk'])){
    $kolicina = $_POST['njagodasejk'];
    echo "jagodasejk  ".$kolicina." cena ".$kolicina*355 ."<br><br>";
    $suma+=$kolicina*355 ;

    $ispis .= "jagodasejk  ".$kolicina." cena ".$kolicina*355;
  }

}

if(isset($_POST['milksejk'])){
  if(isset($_POST['nmilksejk'])){
    $kolicina = $_POST['nmilksejk'];
    echo "milksejk  ".$kolicina." cena ".$kolicina*325 ."<br><br>";
    $suma+=$kolicina*325 ;

    $ispis .= "milksejk  ".$kolicina." cena ".$kolicina*325;
  }

}
if(isset($_POST['vanilasejk'])){
  if(isset($_POST['nvanilasejk'])){
    $kolicina = $_POST['nvanilasejk'];
    echo "vanilasejk  ".$kolicina." cena ".$kolicina*350 ."<br><br>";
    $suma+=$kolicina*350 ;

    $ispis .= "vanilasejk  ".$kolicina." cena ".$kolicina*350;
  }

}
if(isset($_POST['cokolodasejk'])){
  if(isset($_POST['ncokolodasejk'])){
    $kolicina = $_POST['ncokolodasejk'];
    echo "cokolodasejk  ".$kolicina." cena ".$kolicina*295 ."<br><br>";
    $suma+=$kolicina*295 ;

    $ispis .= "cokolodasejk  ".$kolicina." cena ".$kolicina*295;
  }

}


 ?>

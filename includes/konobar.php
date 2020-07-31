<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../style/konobar3.css">
  <link href="https://fonts.googleapis.com/css?family=Slabo+27px&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
  </head>
  <body>

    <?php include 'header.php';?>

    <div class="kafic">

      <div class="sto" id="sto1"  onclick="naruceno(1),prikazi(1)">
      </div>
      <div id="prikaz">

      </div>


      <div class="sto" id="sto2" onclick="naruceno(2),prikazi(2)">
      </div>
      <div class="sto" id="sto3" onclick="naruceno(3),prikazi(3)">
      </div>

    </div>
    <form   method="post" action="citanje.php" >


      <div id="x" onclick="zatvoriRacun(1)">
      <i class="fas fa-times"></i>
      </div>
        <nav >
          <div >
            <a href="#">Bezalkoholna <br> pica</a>
            <div>
              <a> kokakola   <input type="checkbox" name="kokakola" value="kokakola" class="pica" >
                <input type="number" name="nkokakola" value="1" >
              </a>
              <a> sweps <input type="checkbox" name="sweps" value="sweps" class='pica' >
              <input type="number" name="nsweps" value="1" class="Bezalkoholna">
              </a>
              <a >next_sok<input type="checkbox" name="nextsok" value="next_sok" class='pica' >
              <input type="number" name="nnextsok" value="1"class="Bezalkoholna">
              </a>
              <a >cedevita<input type="checkbox" name="cedevita" value="cedevita" class='pica' >
              <input type="number" name="ncedevita" value="1"class="Bezalkoholna">
              </a>
              <a >sprite<input type="checkbox" name="sprite" value="sprite" class='pica'>
              <input type="number" name="nsprite" value="1"class="Bezalkoholna">
              </a>
          </div>
        </div>
        <div>
          <a href="#">alkoholna <br> pica</a>
          <div>
            <a> pivo  <input type="checkbox" name="pivo" value="kokakola">
            <input type="number" name="npivo" value="1" >
            </a>
            <a> vino  <input type="checkbox" name="vino" value="kokakola">
            <input type="number" name="nvino" value="1" >
            </a>
            <a> rakija  <input type="checkbox" name="rakija" value="kokakola">
            <input type="number" name="nrakija" value="1" >
            </a>
            <a> viski  <input type="checkbox" name="viski" value="kokakola">
            <input type="number" name="nviski" value="1" >
            </a>
            <a> kokteli  <input type="checkbox" name="kokteli" value="kokakola">
            <input type="number" name="nkokteli" value="1" >
            </a>
          </div>
        </div>
        <div>
          <a href="#">Topli <br>napitci  <br></a>
          <div>


          <a> čaj  <input type="checkbox" name="caj" value="kokakola">
          <input type="number" name="ncaj" value="1" >
          </a>
          <a> kapucino  <input type="checkbox" name="kapucino" value="kokakola">
          <input type="number" name="nkapucino" value="1" >
          </a>
          <a> exspreso  <input type="checkbox" name="exspreso" value="kokakola">
          <input type="number" name="nexspreso" value="1" >
          </a>
          <a> topla cokoloda  <input type="checkbox" name="topla_cokoloda" value="kokakola">
          <input type="number" name="ntopla_cokoloda" value="1" >
          </a>
          <a> late  <input type="checkbox" name="late" value="kokakola">
          <input type="number" name="nlate" value="1" >
          </a>
        </div>
        </div>
        <div>
          <a href="#">Sejkovi <br>  <br></a>
          <div>


          <a> plazmasejk  <input type="checkbox" name="plazmasejk" value="plazmasejk">
          <input type="number" name="nplazmasejk" value="1" >
          </a>
          <a> jagodasejk  <input type="checkbox" name="jagodasejk" value="jagodasejk">
          <input type="number" name="njagodasejk" value="1" >
          </a>
          <a> milksejk <input type="checkbox" name="milksejk" value="milksejk">
          <input type="number" name="nmilksejk" value="1" >
          </a>
          <a> vanilasejk  <input type="checkbox" name="vanilasejk" value="vanilasejk">
          <input type="number" name="nvanilasejk" value="1" >
          </a>
          <a> cokolodasejk  <input type="checkbox" name="cokolodasejk" value="cokolodasejk">
          <input type="number" name="ncokolodasejk" value="1" >
          </a>
        </div>
        </div>
      </nav>


      </div>
      <div class="cena">
        <input type="submit" name="sank" value="Sank" >
        <input type="submit" name="racun" value="Racun">
        <input type="reset" name="Reset" value="Placeno" tabindex="50">
      </div>

    </form>
    <form   method="post" action="citanje.php">
      <div id="x" onclick="zatvoriRacun(2)">
        <i class="fas fa-times"></i>
      </div>
      <nav >
        <div >
          <a href="#">Bezalkoholna <br> pica</a>
          <div>
            <a> kokakola   <input type="checkbox" name="kokakola" value="kokakola">
            <input type="number" name="nkokakola" value="1" >
            </a>
            <a> sweps <input type="checkbox" name="sweps" value="sweps">
            <input type="number" name="nsweps" value="1" class="Bezalkoholna">
            </a>
            <a >next sok<input type="checkbox" name="nextsok" value="sweps">
            <input type="number" name="nnextsok" value="1"class="Bezalkoholna">
            </a>
            <a >cedevita<input type="checkbox" name="cedevita" value="sweps">
            <input type="number" name="ncedevita" value="1"class="Bezalkoholna">
            </a>
            <a >sprite<input type="checkbox" name="sprite" value="sweps">
            <input type="number" name="nsprite" value="1"class="Bezalkoholna">
            </a>
          </div>
        </div>
        <div >
          <a href="#">alkoholna <br> pica</a>
          <div>
            <a> pivo  <input type="checkbox" name="pivo" value="kokakola">
            <input type="number" name="npivo" value="1" >
            </a>
            <a> vino  <input type="checkbox" name="vino" value="kokakola">
            <input type="number" name="nvino" value="1" >
            </a>
            <a> rakija  <input type="checkbox" name="rakija" value="kokakola">
            <input type="number" name="nrakija" value="1" >
            </a>
            <a> viski  <input type="checkbox" name="viski" value="kokakola">
            <input type="number" name="nviski" value="1" >
            </a>
            <a> kokteli  <input type="checkbox" name="kokteli" value="kokakola">
            <input type="number" name="nkokteli" value="1" >
            </a>
          </div>
        </div>
        <div >
          <a href="#">Topli <br>napitci  <br></a>
          <div>


          <a> čaj  <input type="checkbox" name="caj" value="kokakola">
          <input type="number" name="ncaj" value="1" >
          </a>
          <a> kapucino  <input type="checkbox" name="kapucino" value="kokakola">
          <input type="number" name="nkapucino" value="1" >
          </a>
          <a> exspreso  <input type="checkbox" name="exspreso" value="kokakola">
          <input type="number" name="nexspreso" value="1" >
          </a>
          <a> topla cokoloda  <input type="checkbox" name="topla_cokoloda" value="kokakola">
          <input type="number" name="ntopla_cokoloda" value="1" >
          </a>
          <a> late  <input type="checkbox" name="late" value="kokakola">
          <input type="number" name="nlate" value="1" >
          </a>
        </div>
        </div>
        <div>
          <a href="#">Sejkovi <br>  <br></a>
          <div>


          <a> plazmasejk  <input type="checkbox" name="plazmasejk" value="plazmasejk">
          <input type="number" name="nplazmasejk" value="1" >
          </a>
          <a> jagodasejk  <input type="checkbox" name="jagodasejk" value="jagodasejk">
          <input type="number" name="njagodasejk" value="1" >
          </a>
          <a> milksejk <input type="checkbox" name="milksejk" value="milksejk">
          <input type="number" name="nmilksejk" value="1" >
          </a>
          <a> vanilasejk  <input type="checkbox" name="vanilasejk" value="vanilasejk">
          <input type="number" name="nvanilasejk" value="1" >
          </a>
          <a> cokolodasejk  <input type="checkbox" name="cokolodasejk" value="cokolodasejk">
          <input type="number" name="ncokolodasejk" value="1" >
          </a>
        </div>
        </div>
      </nav>

      <div class="cena">
        <input type="submit" name="sank" value="Sank">
        <input type="submit" name="racun" value="Racun">
        <input type="reset" name="Reset" value="Placeno" tabindex="50"  onclick="resetForm(3)">
      </div>
    </form>
    <form   method="post" action="citanje.php">
      <div id="x" onclick="zatvoriRacun(3)">
        <i class="fas fa-times"></i>
      </div>
        <nav >
          <div >
            <a href="#">Bezalkoholna <br> pica</a>
            <div>
              <a> kokakola   <input type="checkbox" name="kokakola" value="kokakola">
                <input type="number" name="nkokakola" value="1" >
              </a>
              <a> sweps <input type="checkbox" name="sweps" value="sweps">
              <input type="number" name="nsweps" value="1" class="Bezalkoholna">
              </a>
              <a >next sok<input type="checkbox" name="nextsok" value="sweps">
              <input type="number" name="nnextsok" value="1"class="Bezalkoholna">
              </a>
              <a >cedevita<input type="checkbox" name="cedevita" value="sweps">
              <input type="number" name="ncedevita" value="1"class="Bezalkoholna">
              </a>
              <a >sprite<input type="checkbox" name="sprite" value="sweps">
              <input type="number" name="nsprite" value="1"class="Bezalkoholna">
              </a>
          </div>
        </div>
        <div>
          <a href="#">alkoholna <br> pica</a>
          <div>
            <a> pivo  <input type="checkbox" name="pivo" value="kokakola">
            <input type="number" name="npivo" value="1" >
            </a>
            <a> vino  <input type="checkbox" name="vino" value="kokakola">
            <input type="number" name="nvino" value="1" >
            </a>
            <a> rakija  <input type="checkbox" name="rakija" value="kokakola">
            <input type="number" name="nrakija" value="1" >
            </a>
            <a> viski  <input type="checkbox" name="viski" value="kokakola">
            <input type="number" name="nviski" value="1" >
            </a>
            <a> kokteli  <input type="checkbox" name="kokteli" value="kokakola">
            <input type="number" name="nkokteli" value="1" >
            </a>
          </div>
        </div>
        <div>
          <a href="#">Topli<br> napitci <br></a>
          <div>


          <a> čaj  <input type="checkbox" name="caj" value="kokakola">
          <input type="number" name="ncaj" value="1" >
          </a>
          <a> kapucino  <input type="checkbox" name="kapucino" value="kokakola">
          <input type="number" name="nkapucino" value="1" >
          </a>
          <a> exspreso  <input type="checkbox" name="exspreso" value="kokakola">
          <input type="number" name="nexspreso" value="1" >
          </a>
          <a> topla cokoloda  <input type="checkbox" name="topla_cokoloda" value="kokakola">
          <input type="number" name="ntopla_cokoloda" value="1" >
          </a>
          <a> late  <input type="checkbox" name="late" value="kokakola">
          <input type="number" name="nlate" value="1" >
          </a>
        </div>
        </div>
        <div>
          <a href="#">Sejkovi <br> <br></a>
          <div>


          <a> plazmasejk  <input type="checkbox" name="plazmasejk" value="plazmasejk">
          <input type="number" name="nplazmasejk" value="1" >
          </a>
          <a> jagodasejk  <input type="checkbox" name="jagodasejk" value="jagodasejk">
          <input type="number" name="njagodasejk" value="1" >
          </a>
          <a> milksejk <input type="checkbox" name="milksejk" value="milksejk">
          <input type="number" name="nmilksejk" value="1" >
          </a>
          <a> vanilasejk  <input type="checkbox" name="vanilasejk" value="vanilasejk">
          <input type="number" name="nvanilasejk" value="1" >
          </a>
          <a> cokolodasejk  <input type="checkbox" name="cokolodasejk" value="cokolodasejk">
          <input type="number" name="ncokolodasejk" value="1" >
          </a>
        </div>
        </div>
      </nav>


      <div class="cena">
        <input type="submit" name="sank" value="Sank">
        <input type="submit" name="racun" value="Racun">
        <input type="reset" name="Reset" value="Placeno" tabindex="50"  onclick="resetForm(3)">
      </div>
    </form>
    <script src="../js/kafic11.js">
    </script>
  </body>
</html>

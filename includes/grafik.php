<?php
include 'header.php';
include 'konekcija.php';

$pazarPoMesecima = array();
for ($i=1; $i<= 12 ; $i++) {
  $godina = (isset($_POST['godina']))?$_POST['godina']:date("Y");
  $mesec = $i;
  $sledeci = $mesec+1;
  $sledeca = $godina +1;
  if ($sledeci == 13) {
    $sledeci = 1;
    $sql1 = "SELECT SUM(cena) AS 'pazar' FROM narudzbina WHERE naruceno_u BETWEEN
              '$godina-$mesec-01' AND '$sledeca-$sledeci-01'";
  }else{
  $sql1 = "SELECT SUM(cena) AS 'pazar' FROM narudzbina WHERE naruceno_u  BETWEEN
          '$godina-$mesec-01' AND '$godina-$sledeci-01'";
}
  $result = mysqli_query($conn,$sql1);
  while($row = $result->fetch_assoc()){
  array_push($pazarPoMesecima,$row['pazar']);
}
}

$sql2 = "SELECT korisnicko_ime
FROM korisnik WHERE korisnicki_nivo = 2";

$imenaKonobara = array();

$result1 = mysqli_query($conn,$sql2);
while($row1 = $result1->fetch_assoc()){
array_push($imenaKonobara,$row1['korisnicko_ime']);
}
$imenaKonobara11  = array();
for ($ime=0 ; $ime <sizeof($imenaKonobara)  ; $ime++ ) {
  $a ="'".$imenaKonobara[$ime]."'";
  array_push($imenaKonobara11,$a);
}



$konobariPoMesecima = array( );
for ($i=0; $i < sizeof($imenaKonobara11); $i++) {
  $konobar  = array();
  for ($j=1; $j <=12 ; $j++) {
    $godina =(isset($_POST['godina']))?$_POST['godina']:date("Y");
    $mesec = $j;
    $sledeci = $mesec+1;
    $sledeca = $godina +1;
    if ($sledeci == 13) {
      $sledeci = 1;
      $sql3 = "SELECT SUM(cena) AS 'pazar' FROM narudzbina,korisnik WHERE
      korisnik.korisnici_id = narudzbina.korisnici_id and
      korisnicko_ime =".$imenaKonobara11[$i]."and naruceno_u BETWEEN
                '$godina-$mesec-01' AND '$sledeca-$sledeci-01' ";
    }else{
    $sql3 = "SELECT SUM(cena) AS 'pazar' FROM narudzbina,korisnik WHERE
    korisnik.korisnici_id = narudzbina.korisnici_id and
    korisnicko_ime = $imenaKonobara11[$i] and naruceno_u  BETWEEN
            '$godina-$mesec-01' AND '$godina-$sledeci-01'";
          }
          $result3 = mysqli_query($conn,$sql3);
          $row3 = $result3->fetch_assoc();
          array_push($konobar,$row3['pazar']);
  }
  array_push($konobariPoMesecima,$konobar);
}

echo json_encode($konobariPoMesecima);











?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="../js/Chart.bundle.js"></script>
  	<script src="../js/utils.js"></script>
    <title></title>
    <style>
    canvas {
      -moz-user-select: none;
      -webkit-user-select: none;
      -ms-user-select: none;
      margin: auto;
    }
    </style>
	</style>
  </head>
  <body>
     <div id="container" style="width: 75%;margin: auto; border-bottom:2px solid red;">
  		<canvas id="canvas"></canvas>
      <canvas id="canvas1"></canvas>
  	</div>
    <form  method="post">
      <select  name="godina">                                        <!--  drop down za mesec -->
       <option value="-1" selected>godina</option>
       <option <?php if( isset($_POST['godina']) && $_POST['godina'] == '2019'){
         echo"selected";
       } ?> >2019</option>
       <option <?php if( isset($_POST['godina']) && $_POST['godina'] == '2020'){
         echo"selected";
       } ?>>2020</option>
     </select>
     <input type="submit" name="" value="prikazi">
    </form>


  	 <script>
  		var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
  		var color = Chart.helpers.color;
  		var barChartData = {
  			labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
  			datasets: [{
  				label: 'Pazar',
  				backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
  				borderColor: window.chartColors.red,
  				borderWidth: 1,
  				data:
  					<?php echo json_encode($pazarPoMesecima); ?>

  			}]

  		};

      var imena = <?php echo json_encode($imenaKonobara);?>

      var vrednosti = <?php echo json_encode($konobariPoMesecima);?>




      var barChartData1 = {
  			labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],



        datasets: [{
  				label: 'urosDragan',
  				backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
  				borderColor: window.chartColors.red,
  				borderWidth: 1,
  				data: vrednosti[0]
  			}, {
  				label: 'Test',
  				backgroundColor: color(window.chartColors.yellow).alpha(0.5).rgbString(),
  				borderColor: window.chartColors.blue,
  				borderWidth: 1,
  				data: vrednosti[1]
  			}, {
  				label: 'Branka',
  				backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
  				borderColor: window.chartColors.blue,
  				borderWidth: 1,
  				data:vrednosti[2]
  			},{
  				label: 'Pavle',
  				backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
  				borderColor: window.chartColors.blue,
  				borderWidth: 1,
  				data:vrednosti[3]
  			}
        ,{
          label: 'Mile',
          backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
          borderColor: window.chartColors.blue,
          borderWidth: 1,
          data:vrednosti[4]
        },{
          label: 'cane',
          backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
          borderColor: window.chartColors.blue,
          borderWidth: 1,
          data:vrednosti[5]
        }
      ]
  		};
/*		var colorNames = Object.keys(window.chartColors);
    var colorName = colorNames[barChartData.datasets.length % colorNames.length];
    var dsColor = window.chartColors[colorName];
      window.onload = function(){
        for (var i = 0; i < imena.length; i++) {
          var newDataset = {
            label: imena[i],
            backgroundColor: color(dsColor).alpha(0.5).rgbString(),
            borderColor: dsColor,
    				borderWidth: 1,
    				data: [1,2,3,4,5]
          }
        };
        for (var index = 0; index < barChartData.labels.length; ++index) {
  				newDataset.data.push(vrednosti[index]);
  			}

        barChartData1.datasets.push(newDataset);
        window.myBar.update();

      }*/

  		window.onload = function() {
  			var ctx = document.getElementById('canvas').getContext('2d');
  			window.myBar = new Chart(ctx, {
  				type: 'bar',
  				data: barChartData,
  				options: {
  					responsive: true,
  					legend: {
  						position: 'top',
  					},
  					title: {
  						display: true,
  						text: 'pazar na mececnom nivou'
  					}
  				}
  			});

        var ctx1 = document.getElementById('canvas1').getContext('2d');
        window.myBar = new Chart(ctx1, {
          type: 'bar',
          data: barChartData1,
          options: {
            responsive: true,
            legend: {
              position: 'top',
            },
            title: {
              display: true,
              text: 'pazar na mececnom nivou'
            }
          }
        });

  		};


  	</script>
  </body>
</html>


<?php
 /*$konobariPoMesecima = array();

 for ($i=0; $i < $imenaKonobara ; $i++) {
   $konobar = array( );
   for ($j=1; $j <= 12 ; $j++) {

     $godina = $_POST['godina'];
     $mesec = $j;
     $sledeci = $mesec+1;
     $sledeca = $godina +1;
     if ($sledeci == 13) {
       $sledeci = 1;
       $sql3 = "SELECT SUM(cena) AS 'pazar' FROM narudzbina,korisnik WHERE
       korisnik.korisnici_id = narudzbina.korisnici_id and
       korisnicko_ime = $imenaKonobara[$i] and naruceno_u BETWEEN
                 '$godina-$mesec-01' AND '$sledeca-$sledeci-01'";
     }else{
     $sql3 = "SELECT SUM(cena) AS 'pazar' FROM narudzbina,korisnik WHERE
     korisnik.korisnici_id = narudzbina.korisnici_id and
     korisnicko_ime = $imenaKonobara[$i] and naruceno_u  BETWEEN
             '$godina-$mesec-01' AND '$godina-$sledeci-01'";
           }

           $result3 = mysqli_query($conn,$sql2);
           $row = $result3->fetch_assoc();
           array_push($konobar,$row['pazar']);


   }
     array_push($konobariPoMesecima,$konobar);
 }

 print_r($konobariPoMesecima);

 ?>*/

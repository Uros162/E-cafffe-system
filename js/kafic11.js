//
// var listaPica = [
//   ['cocacola',150],
//   ['sweps',160],
//   ['next sok',120],
//   [ 'pivo', 170]
// ];
//
// var suma = 0;
//
// function dodajArtikal(artikal){
// var racun = document.getElementsByClassName('racun')[0];
// let ispis = document.createElement('h3');
// ispis.innerText=listaPica[artikal-1][0]+" "+listaPica[artikal-1][1];
// racun.appendChild(ispis);
// suma += listaPica[artikal-1][1];
//
//  document.getElementsByClassName('cena')[0].innerText = suma + ' rsd';
//  document.getElementsByClassName('sto')[0].innerText = suma + ' rsd';
//  document.getElementsByClassName('sto')[0].style.background = 'white';
//
//
// }
//
//
// function dodaj(artikal){
//   let racun = document.getElementsByClassName('racun')[0];
//   let ispis = document.createElement('h3');
//   ispis.innerText=listaPica[artikal-1][0]+" "+listaPica[artikal-1][1];
//   let ispisi1
// }
//
//
//
//
// function reset(sto){
// let ispisanaPica = document.getElementsByTagName('h3');
//
//
// let racun = document.getElementsByClassName('racun')[sto-1];
// let child = racun.lastElementChild;
// while (child) {
//   racun.removeChild(child);
//   child = racun.lastElementChild;
// }
//
// suma = 0
// document.getElementsByClassName('cena')[sto-1].innerText = suma;
// document.getElementsByClassName('sto')[0].innerHTML = '';
// document.getElementsByClassName('sto')[0].style.background = 'green';
// }
//
// function prikaziRacun(sto){
// // let liste = document.getElementsByTagName('nav');
//   //
//   // if(liste.length >1){
//   //   document.getElementsByTagName('body')[0].removeChild(liste[1]);
//   // }
//   let picaa = document.getElementsByClassName('okvir');
//  for (var i = 0; i < picaa.length; i++) {
//     picaa[i].style.display = 'none'
//   }
//   document.getElementsByClassName('okvir')[sto-1].style.display='block';
//    document.getElementById('listaPica').style.display='flex';
// }
// function dodajj(artikal,sto){
//   var chck = document.getElementsByClassName('Bezalkoholna')[sto-1];
//     let h3 = document.getElementsByTagName(document.createElement('h3'))
//     h3.innerText = listaPica[artikal-1][0];
//
//
//
//   if (chck.checked == true){
//     document.getElementsByClassName('racun')[sto-1].appendChild(h3);;
//
// }else {
//   h3.style.display ='none';
// }}

// function dodaj(pice) {
//   var ff = document.getElementById('prikaz');
//   var pica = document.getElementsByClassName('pica');
//
//   for (var i = 0; i < pica.length; i++) {
//     if (pica[i].checked == true) {
//
//         p = pice;
//     }
//
//   }
// ff.innerHTML += p + "<br>";
// }
//
// function prikazNarudzbine(){
//   document.getElementById('prikaz').style.display = 'block';
// }




//
// function dodaj() {
//   var ff = document.getElementById('mir');
//   var pice = document.getElementById('pice');
//
//   if (pice.checked == true) {
//     ff.innerText = "kokakola";
//   }
// }
//
// function ddd(){
//
// }


// function myFunction() {
//   var checkBox = document.getElementById("myCheck");
//   var text = document.getElementById("text");
//   if (checkBox.checked == true){
//     text.style.display = "block";
//   } else {
//      text.style.display = "none";
//   }
// }

function zatvoriRacun(sto){
  document.getElementsByTagName('form')[sto-1].style.display = 'none';
}

function prikazi(sto){
  document.getElementsByTagName('form')[sto-1].style.display = 'block';
}

function resetForm(sto){
  document.getElementsByClassName('sto')[sto-1].style.background = '#A3C852';
  document.getElementsByTagName('form')[sto-1].style.display = 'none';
}


function naruceno(sto){
  document.getElementsByClassName('sto')[sto-1].style.background = '#CF4D39';
}

function proveriRegistraciju(){
  var username = document.getElementById('username').value;
  var password = document.getElementById('password').value;
  var repeatPassword = document.getElementById('repeatPassword').value;

  if (username == "" || password == "" || repeatPassword == "" ) {
    alert('unesite podatke');
    return false;
  }else if(username.length < 4){
    alert('korisnicko ime mora sarzati  vise od cetir slova');
    return false;
  }else if(password.length < 4|| repeatPassword.length < 4){
    alert('password mora sadrzati vise od 4 slova');
    return false;
  }else if(password != repeatPassword){
      alert('lozinke se ne poklapaju');
      return false;
  }else{
    return true;
  }
}

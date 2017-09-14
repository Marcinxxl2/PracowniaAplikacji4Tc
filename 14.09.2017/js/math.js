/*

function pi() {
    if (document.getElementById('wyborPI').checked == true) {
        innerHTML == Math.PI;
    } else if (document.getElementById('wyborNic').checked == true) {
        document.getElementById('blok').innerHTML == 'Nic';
    } else {
        document.getElementById('blok').innerHTML == 'Nic';
    }
}

*/

//Math.sqrt()

var pierwiastek = Math.sqrt(25);
console.log('Pierwiastek: ' + pierwiastek);

//round, min, max

var a = 13.2;
var b = 28.5;

var minimalna = Math.min(a, b);
var maksymalna = Math.max(a, b);
console.log('Minimalna: ' + minimalna);
console.log('Maksymalna: ' + maksymalna);
var zaokraglenie = Math.round(a);
console.log('Zaokrąglenie: ' + zaokraglenie);
var zaokMin = Math.round(minimalna);
console.log('Zaokrąglenie minimalnej: ' + zaokMin);

//abs, floor, round

var x = -56;
var y = -13.1;
var z = 14.9;

document.write('<br>' + Math.abs(x) + '<br>'); //56
document.write(Math.abs(y) + '<br>'); //13.1
document.write(Math.abs(z) + '<br>'); //14.9

document.write('<br>' + Math.round(x) + '<br>'); //-56
document.write(Math.round(y) + '<br>'); //-13
document.write(Math.round(z) + '<br>'); //15

document.write('<br>' + Math.floor(x) + '<br>'); //-56
document.write(Math.floor(y) + '<br>'); //-14
document.write(Math.floor(z) + '<br>'); //14

//potęgi

var p = Math.pow(2, 10);
console.log('Potęga:' + p); //1024

var losuj = Math.random();
console.log('Wylosowana liczba: ' + losuj);

//Losuj z przedziału od 0 do 10
var wylosowana = Math.floor(Math.random() * (10 + 1));
console.log('Wylosowana z przedziału: ' + wylosowana);

for (var i = 0; i < 10; i++) {
    var wylosowana = Math.floor(Math.random() * (90 + 1) + 10);
    console.log('Wylosowana z przedziału: ' + wylosowana);
}

for (var i = 1; i <= 10; i++) {
    if (i > 1)
        document.write(i + ' razy <br>');
    else
        document.write('<br>' + i + ' raz <br>');
}

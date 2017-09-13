

/*
function witaj(imie) {
    document.write('Witaj ' + imie);

}

var name = 'Maciej'
witaj(name);

var a = prompt('Podaj a:');
var b = prompt('Podaj b:');

function obliczPoleProstokata(a, b) {
    var pole = a * b;
    return pole;
}

console.log(obliczPoleProstokata(a, b));
*/

/*
function poleObjetosc(szerokosc, dlugosc, wysokosc) {
    var pole = szerokosc * dlugosc;
    var objetosc = pole * wysokosc;
    var wynik = [pole, objetosc];
    return wynik;
}
*/

//console.log(poleObjetosc(2, 3, 4));

/*var pole = poleObjetosc(2, 3, 4)[0];
var objetosc = poleObjetosc(2, 3, 4)[1];*/

/*console.log('Pole: ' + pole);
console.log('Pole: ' + objetosc);*/

/*
var wybor = prompt('Podaj wartość: ', '0 - pole, 1 - objętość');

console.log(poleObjetosc(2, 3, 4)[wybor]);
*/


//Napisać skrypt, który oblicza obwód, pole oraz objętość stożka. Dane użytkownik podaje z klawiatury i zaznacza co chce obliczyć w radio. Wynik wypisuje się w divie

function oblicz() {
    var form = document.forms["formularz"];
    var wybor = parseInt(form.wybor.value);
    var r = parseFloat(form.r.value);
    var h = parseFloat(form.h.value);
    const pi = Math.PI;
    const rKwadrat = Math.pow(r, 2);
    var wynik;

    switch (wybor) {
        case 1:
            wynik = 2 * pi * r;
            break;
        case 2:
            wynik = pi * rKwadrat;
            break;
        case 3:
            wynik = (1/3) * pi * rKwadrat * h;
            break;
        default:
            wynik = "Nie wybrano opcji";
            break;
    }

    document.getElementById("wynik").innerHTML = wynik;
}


/*for (var i = 0; i < 10; i++) {
    document.write(i);
    if (i == 7) {
        break;
    }
}*/

//Użytkownik podaj z klawiatury wartość początkową i końcową pętli, po każdej liczbie przecinek, a tylko po ostatniej korpkę, liczba pierwsza musi być mniejsza niż drugiej

/*a = prompt("Podaj pierwszą liczbę");
b = prompt("Podaj drugą liczbę");

if (a >= b)
    alert("Liczba pierwsza musi być mniejsza niż druga");

for (var i = a; i <= b; i++) {
    if (i == b)
        document.write(i + '.');
    else
        document.write(i + ', ');
}*/

/*while (i++ < 5) {
    document.write(i + '<br>');
}*/

/*do {
    var wiek = prompt('Podaj wiek');
    if (wiek == 18) {
        document.write('Masz 18 lat');
    }
} while (wiek != 18)*/

//Podaj 5 liczb podzielnych przez 2 z klawiatury, Zapisz je do tablicy i wyświelt na stronie

var liczby = new Array;
var podana;

for (var i = 0; i < 5; i++) {
    do {
        podana = prompt("Podaj liczbę podzielną przez 2");
    } while (podana % 2 != 0)
        liczby.push(podana);
}

document.write(liczby);

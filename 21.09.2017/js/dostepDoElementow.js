//getElementById()

var elPierwszy = document.getElementById('pierwszy');
elPierwszy.className = 'zielony';

//getElementsByTagName()

var elNaglowek = document.getElementsByTagName('h1');
console.log(elNaglowek);
if (elNaglowek.length > 0)
{
    console.log(elNaglowek);
    console.log(elNaglowek.length);
    elNaglowek[0].className = 'czerwony';
}

//getElmentsByClassName()

var elCzerwony = document.getElementsByClassName('czerwony');
if (elCzerwony.length > 0)
{
    console.log(elCzerwony.length);

    //Wolniejszy sposób
    elCzerwony.item(elCzerwony.length - 1).className = 'czerwony';

    //Szybszy sposób
    elCzerwony[elCzerwony.length - 1].className = 'czerwony';
}

//getElementsByName

var elAuta = document.getElementsByName('auto');
console.log(elAuta);
elAuta[0].className = "grey";

//querySelector()

var elImie = document.querySelector('li.grey');
elImie.className = 'zielony';

//querySelectorAll()

/* 
var elImiona = document.querySelectorAll('li.grey');
console.log(elImiona);
elImiona[0].className = 'zielony'; 
*/

//W domu
//Zmień wszystkie elementy w liście z imionami na czerwone, wykorzystaj metodę forEach oraz querySelectorAll

var elImiona = document.querySelectorAll('li.grey');
elImiona.forEach(function (imie) {
    imie.className = 'czerwony';
});

//previosElementSibling, nextElementSibling

var poczatekElem = document.getElementById('ks2');
poczatekElem.className = 'zielony';

var poprzedniElem = poczatekElem.previousElementSibling;
poprzedniElem.className = 'zielony';

var nastepnyElem = poczatekElem.nextElementSibling;
nastepnyElem.className = 'zielony';

//firstElementChild, lastElementChild

var lista = document.getElementsByTagName('ul')[2];
var pierwszy = lista.firstElementChild;
//pierwszy.className = 'czerwony';
var ostatni = lista.lastElementChild;
//ostatni.className = 'czerwony';

pierwszy.setAttribute('class', 'zielony');

//*********************************************

//Zamień pierwszy element na button, i przypisz mu wartość wyślij

var input = document.getElementsByTagName('input')[0]
input.setAttribute('type', 'button');
input.setAttribute('value', 'xd');

//Tekst www łączy ze stroną szkoły
document.getElementById('link').setAttribute('href', 'http://www.zsk.poznan.pl');






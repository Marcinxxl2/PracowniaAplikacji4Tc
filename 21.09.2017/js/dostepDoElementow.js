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

//querySelector()

var elImiona = document.querySelectorAll('li.grey');
console.log(elImiona);
elImiona[0].className = 'zielony';

//W domu
//Zmień wszytskie elemnty z imion na inny kolor tła

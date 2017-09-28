//var tekst = 'Zespół Szkół Komunikacji';
//var tekst2 = '898989898989U89';
//var tekst3 = 'ą';
//var tekst4 = 'test@';
//var tekst5 = '.pl';
//var tekst6 = 'dsad22asD';
//var regEx = /szkół/i; true
//var regEx = /^szkół/i; false
//var regEx = /szkół$/i; false
//var regEx = /^Zespół/i; true
//var regEx = /kacji$/i; true
//var regEx = /^kacji$/i; false
//var regEx = /^Zespół Szkół Komunikacji$/i; true
//var regEx = /[a-z]/i; true, true, false
//var regEx = /[ąężźćółń]|[a-z]/i; true, true, true

//var regEx = /[a-z]/; false
//var regEx = /[ąęńśćźżó]/; true
//var regEx = /[ąęńśćźżó]|[a-z]/; | oznacza lub albo warunek po lewej albo po prawej
//var regEx = /[ąęńśćźżó][a-z]/;

//var regEx = /[a-z]\s/; \s oznacza spacje true

//var regEx = /^[a-z]+@/ + powoduje ze litera przynajmniej jedna musi być
//var regEx = /^[a-z]*@/ * gdy może byc to co przed gwiazdka ale nie musi!
//var regEx = /^[t]?@/ gdy ? moze ale nie musi TYLKO raz w wystapic litera przed @

//var regEx = /[a]{1}/ czy 1 litera a
//var regEx = /[a]{2,3}/ minimum 2 litery a

//var regEx = /\w/; litery, cyfry, znak podkreślnia
//var regEx = /\W/; przeciwieńsytwo \w
//var regEx = /\d\; sprawdza czy są litery
//var regEx = /\D\; przeciwieństwo \d

window.close();
//var sprawdz = regEx.test(tekst5);
//console.log(sprawdz);

/*var elTekst = document.getElementById("tekst");
var elWynik = document.getElementById("wynik");
var regEx = /^[0-9]{2}-[0-9]{3}$/;


function testuj() {
    if (regEx.test(elTekst.value)) {
        elWynik.textContent = "Dobrze";
    } else if (elTekst.value == '') {
        elWynik.textContent = '';
    } else {
        elWynik.textContent = 'Źle';
    }

}

elTekst.addEventListener('input', testuj);*/

/*var pliki = 'plik.mp3 arkusz.csv muzyka.mp3 tekst.txt';
var regEx = /(\w+\.mp3)/;
var sprawdz = regEx.exec(pliki);
console.log(sprawdz);*/

//NIE DZIAŁA??????

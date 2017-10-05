var janusz = {
    wzrost: 180,
    waga: 79,
    miejsceUrodzenia: 'Poznań',
    plec: 'm'
};

//console.log(janusz);
//console.log(janusz.wzrost);

//Utwórz obiekt z właściwaościami: marka, model, predkosc, wyswietl(metoda)
	
var auto = {
    marka: "Pyssa",
    model: "Ryszard",
    predkosc: 69,
    
    wyswietl() {
        return 'Marka: ' + this.marka;
    }
}

//console.log(auto.wyswietl());

//*******************************************************************************************

var ksiazka = {
    tytul: 'Pan Tadeusz',
    rokWydania: '1834',
    gatunek: 'Poemat epicki',
        
        autor: {
            imie: 'Adam',
            nazwisko: 'Mickiewicz',
            wyswietlDane() {
                return 'Imię: ' + this.imie + '<br>Nazwisko: ' + this.nazwisko;
            }
        }
}

console.log(ksiazka.autor.nazwisko);
console.log(ksiazka['autor']['nazwisko']);
console.log(ksiazka.autor['nazwisko']);

var klucz = 'imie';
console.log(ksiazka.autor[klucz]);

//******************************************************************************************

//Tworzenie pustego obiektu

var produkt = {};

//Sprawdzamy czy właściwość istnieje

console.log(typeof(produkt.nazwa)); //undefined

//Dodawanie właściwości i metod

/*produkt.nazwa = 'pralka';
produkt.firma = 'Bosch';
produkt.model = 'WAK2024PI';
produkt.waga = 8;
produkt.cena = 1500;

produkt.wyswietl = function() {
    for (var el in produkt) {
        if (typeof(produkt[el]) != 'function') {
            document.write(el + ': ' + produkt[el] + '<br>');        
        }
    }
}
produkt.wyswietl();*/

//delete produkt.wyswietl(); Usuwanie czegoś z obiektu

/*
var hotel = new Object();
hotel.nazwa = 'Hotel Poznań';
hotel.pokoje = 50;
hotel.zarezerwowane = 20;
hotel.silownia = true;
hotel.basen = true;
hotel.radzajPokoju = ['pojedynczy', 'podwójny', 'rodzinny', 'apartament'];
hotel.wolnePokoje = function() {
    return this.pokoje - this.zarezerwowane;
}

console.log(hotel.wolnePokoje());
*/

//Konstruktor

function Hotel(nazwa, pokoje, pokojeZarezerowane) {
    this.nazwa = nazwa;
    this.pokoje = pokoje;
    this.pokojeZarezerwowane = pokojeZarezerowane;
    
    this.wolnePokoje = function() {
        return this.pokoje - this.pokojeZarezerwowane;
    }
}

var hotelLech = new Hotel('Lech', '40', '15');
var hotelMerkury = new Hotel('Merkury', '600', '250');

console.log(hotelLech.wolnePokoje());
console.log(hotelMerkury.wolnePokoje());

//Tablice w obiekcie

var platnosci = {
    pokoj1: [50, 100],
    pokoj2: [50, 100, 1000],
    pokoj3: [500, 100],
    pokoj4: [250, 100],
}

console.log(platnosci.pokoj1[0]);
console.log(platnosci.pokoj2.length);

function Auto() {
    this.marka = 'Ferrari';
}

var samochod = new Auto();
console.log(samochod.marka);

function Osoba (imie, nazwisko, wiek, plec) {
    this.imie = imie;
    this.nazwisko = nazwisko;
    this.wiek = wiek;
    this.plec = plec;
    this.narodowosc = 'Starożytne Imperium Lechickie';
}

var pyssa = new Osoba('Ryszard', 'Pyssa', 69, 'M++');

console.log(pyssa.narodowosc);

//Utwórz konstruktor o nazwie pies i parametrach: imie, rasa, waga oraz ulubione zajęcia. Ulubione zajęcia ma być tablicą

function Pies(imie, rasa, waga, zajecia) {
    this.imie = imie;
    this.rasa = rasa;
    this.waga = waga;
    this.zajecia = zajecia;
}

var azor = new Pies ('Azor', 'Jamnik', 37, ['Jedzenie', 'Spanie']);
var edi = new Pies ('Edi', 'Kundel', 5, ['Jedzenie', 'Picie']);
var saba = new Pies ('Saba', 'Chihuahua', 2, ['Bieganie', 'Leży']);

console.log(azor.imie);

var psy = [azor, edi, saba];
edi.zajecia.push('spanie');

var rozmiar;
for (var i=0; i < psy.length; i++) {
    rozmiar = 'mały';
    if (psy[i].waga > 10) {
        rozmiar = 'duży';
    }
    document.write('Pies: ' + '<span style="color: blue">' + psy[i].imie + '</span>' + ' to: ' + rozmiar + '<br>');
}
	
//**********************************************************************************************

var a;
for (a in edi) {
	if (a == 'imie' || a == 'rasa'){
		document.write(a + ': ' + edi[a] + '<br>');		
	}
}

//prototype

function pole(a, b) {
	return a * b;
}

console.log(pole.length); //w
console.log(pole.constructor); //f Function { [native] }
console.log(pole.prototype); //{constructor f}

function Uczen (imie, nazwisko) {
	this.imie = imie;
	this.nazwisko = nazwisko;
}

var maciej = new Uczen ('Maciej', 'Trybuś');
Uczen.prototype.narodowosc= 'polska';
Uczen.prototype.wyswietlUcznia = function() {
	return 'Imię: ' + this.imie + ', nazwisko: ' + this.nazwisko + ', narodowość: ' + this.narodowosc;
}
console.log(maciej.wyswietlUcznia());

console.log(Uczen.prototype.narodowosc);

document.write(maciej.constructor.prototype.narodowosc);

//*********************************************************************************************

function Rower (firma, kolor) {
	this.firma = firma;
	this.color = kolor;
}

Rower.prototype.iloscKol = 2;
Rower.prototype.wyswietl = function() {
	var wynik = '';
	for(var i in this) {
		if (typeof this[i] != 'function')
		wynik += this[i]; 
	}
	return wynik;
}

var cos = new Rower('cos', 'Biały');
document.write(cos.wyswietl());

console.log(cos.hasOwnProperty('firma'));

for (var i in cos){
	if (cos.hasOwnProperty(i)) {
		document.write(i + ': ' + cos[i] + '<br>');
	}
}

//*********************************************************************************************

var pies = {
	nazwa: 'Pies',
	waga: 10
};

function Zwierze(imie) {
	this.imie = imie;
}

Zwierze.prototype = pies;

var kajtek = new Zwierze ('kajtek');

console.log(pies.isPrototypeOf(kajtek)); //true



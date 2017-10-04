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

produkt.nazwa = 'pralka';
produkt.firma = 'Bosch';
produkt.model = 'WAK2024PI';
produkt.waga = 8;
produkt.cena = 1500;

produkt.wyswietl = function() {
    return 'Nazwa produktu: ' + this.nazwa + '<br>Firma: ' + this.firma + '<br>Model: ' + this.model + '<br>Waga: ' + this.waga + '<br>Cena: ' + this.cena;
}

document.write(produkt.wyswietl());
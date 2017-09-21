var elDod = document.getElementById("dodawanie");
var elOde = document.getElementById("odejmowanie");
var elMno = document.getElementById("mnozenie");
var elDzi = document.getElementById("dzielenie");
var elWynik = document.getElementById("wynik");

var elLiczba1 = document.getElementById("pierwsza");
var elLiczba2 = document.getElementById("druga");

elDod.onclick = function () {
    
    elWynik.textContent = parseFloat(elLiczba1.value) + parseFloat(elLiczba2.value);
}

elOde.onclick = function () {
    elWynik.textContent = parseFloat(elLiczba1.value) - parseFloat(elLiczba2.value);
}

elMno.onclick = function () {
    elWynik.textContent = parseFloat(elLiczba1.value) * parseFloat(elLiczba2.value);
}

elDzi.onclick = function () {
    
    if (parseFloat(elLiczba2.value) == 0) 
        elWynik.textContent = "Nie wolno dzielić przez zero!";
    else
        elWynik.textContent = parseFloat(elLiczba1.value) / parseFloat(elLiczba2.value);
}
document.getElementById("potegowanie").onclick = function () {
    var liczba1 = parseFloat(document.getElementById("pierwsza").value);
    var liczba2 = parseFloat(document.getElementById("druga").value);
    var elWynik = document.getElementById("wynik");
    if (isNaN(liczba1) || isNaN(liczba2))
        elWynik.textContent = "Wpisz wymagane dane";
    else if (liczba2 < 0)
        elWynik.textContent = "Wykładnik nie może być ujemny"
    else
        elWynik.textContent = "Wynik działania wynosi: " + Math.pow(liczba1, liczba2);
}
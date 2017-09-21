document.getElementById("potegowanie").onclick = function () {
    var liczba1 = parseFloat(document.getElementById("pierwsza").value);
    var liczba2 = parseFloat(document.getElementById("druga").value);
    
    if (isNaN(liczba1) || isNaN(liczba2))
        document.getElementById("wynik").textContent = "Wpisz wymagane dane";
    else
        document.getElementById("wynik").textContent = Math.pow(liczba1, liczba2);
}
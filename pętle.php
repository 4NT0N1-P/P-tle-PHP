<?php

echo "1. 10 kolejnych liczb od 1:\n";
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}

echo "\n\n2. 10 kolejnych liczb od 10 malejąco:\n";
for ($i = 10; $i >= 1; $i--) {
    echo $i . " ";
}

echo "\n\n3. Suma 10 kolejnych liczb od 1:\n";
$suma = 0;
for ($i = 1; $i <= 10; $i++) {
    $suma += $i;
}
echo "Suma = $suma";

echo "\n\n4. 10 kolejnych liczb parzystych od 2:\n";
for ($i = 2; $i <= 20; $i += 2) {
    echo $i . " ";
}

echo "\n\n5. Oszczędzanie pracownika:\n";
$x = 12; 
$y = 1000; 
$kwota = 0;

for ($i = 1; $i <= $x; $i++) {
    $kwota += $y;
    $kwota *= 1.08;
}

echo "Po $x miesiącach pracownik zgromadzi: " . round($kwota, 2) . " zł";

echo "\n\n6. Suma ciągu arytmetycznego:\n";
$a1 = 5;
$r = 10;
$n = 100;

$an = $a1 + ($n - 1) * $r;
$suma = ($a1 + $an) * $n / 2;

echo "Suma ciągu = $suma";

echo "\n\n7. Ilość cegieł w piramidzie 10x10:\n";
$podstawa = 10;
$cegly = 0;

for ($i = $podstawa; $i >= 1; $i--) {
    $cegly += $i * $i;
}

echo "Liczba cegieł = $cegly";

echo "\n\n8. Ilość cegieł w ścianie:\n";
$x = 20; 
$y = 5;  
$z = 2;  

$cegly = 0;
$aktualnyRzad = $x;

for ($i = 1; $i <= $y; $i++) {
    if ($aktualnyRzad > 0) {
        $cegly += $aktualnyRzad;
        $aktualnyRzad -= $z;
    }
}

echo "Liczba cegieł = $cegly";

echo "\n\n9. Waga ściany:\n";
$k = 3; 
$waga = $cegly * $k;

echo "Waga ściany = $waga kg";

echo "\n\n10. Prosty kalkulator:\n";
$a = 10;
$b = 5;
$operacja = "+";

switch ($operacja) {
    case "+":
        echo "$a + $b = " . ($a + $b);
        break;
    case "-":
        echo "$a - $b = " . ($a - $b);
        break;
    case "*":
        echo "$a * $b = " . ($a * $b);
        break;
    case "/":
        if ($b != 0) {
            echo "$a / $b = " . ($a / $b);
        } else {
            echo "Nie można dzielić przez 0";
        }
        break;
}

echo "\n\n11. Ciąg arytmetyczny:\n";
$n = 10;
$x = 3;
$y = 4;

for ($i = 0; $i < $n; $i++) {
    echo ($x + $i * $y) . " ";
}

echo "\n\n12. Sumowanie dwóch liczb aż suma = 0:\n";
/*
do {
    $a = (int) readline("Podaj pierwszą liczbę: ");
    $b = (int) readline("Podaj drugą liczbę: ");

    $suma = $a + $b;
    echo "Suma = $suma\n";

} while ($suma != 0);
*/

echo "Kod zakomentowany, wymaga danych od użytkownika.";

echo "\n\n13. Silnia liczby:\n";
$liczba = 5;
$silnia = 1;

for ($i = 1; $i <= $liczba; $i++) {
    $silnia *= $i;
}

echo "$liczba! = $silnia";

echo "\n\n14. Ciąg kwadratów:\n";
$n = 5;
$start = 2;

$wartosc = $start;

for ($i = 1; $i <= $n; $i++) {
    echo $wartosc . " ";
    $wartosc = $wartosc * $wartosc;
}

echo "\n\n15. Suma i średnia z 10 losowych liczb 50-100:\n";
$suma = 0;

for ($i = 1; $i <= 10; $i++) {
    $los = rand(50, 100);
    echo $los . " ";
    $suma += $los;
}

$srednia = $suma / 10;

echo "\nSuma = $suma";
echo "\nŚrednia = $srednia";

?>
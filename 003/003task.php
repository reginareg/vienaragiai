<?php

//1
/*Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą.*/

$aktorius1 = 'Jonas Jonaitis';
$aktorius2 = 'Petras Petraitis';

var_dump($aktorius1 == $aktorius2);

if (true) {
    echo $aktorius1;
} else {
    echo $aktorius2;
}

//2
/*Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.*/
echo '<br>';

$name = 'Jonas';
$surname = 'Petraitis';

echo strtoupper($name);
echo strtolower($surname);

//3
/*Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.*/
echo '<br>';

$vardas = 'Jonas';
$pavarde = 'Petraitis';

$vardaspavarde = substr($vardas, 0, 1) . substr($pavarde, 0, 1);
echo $vardaspavarde;

//4
/*Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.*/
echo '<br>';

$var = 'Jonas';
$pav = 'Petraitis';

$varpav = substr($var, 2, 4) . substr($pav, 6, 8);
echo $varpav;

//5
/*Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”. Rezultatą atspausdinti.*/
echo '<br>';

$sakinys = '"An American in Paris"';

$sakinys = str_replace('A', '*', $sakinys);
$sakinys = str_replace('a', '*', $sakinys);

print_r($sakinys);

//6
/*Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti.*/


/*Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą atspausdinti. Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”.
Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; Surasti ir atspausdinti epizodo numerį.
Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” yra žodžių trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”.
Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai.

//Papildomas.
Parašykite kodą, kuris generuotų atsitiktinį stringą su 10 atsitiktine tvarka išdėliotų žodžių, o žodžius generavimui imtų iš 9-me uždavinyje pateiktų dviejų stringų. Žodžiai neturi kartotis. (reikės masyvo)*/
echo '<br>';

$pirmas = 'Don\'t Be a Menace to South Central While Drinking Your Juice in the Hood';
$antras = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';

$masyvas = explode(' ', $pirmas . ' ' . $antras);
shuffle($masyvas);
$masyvas = array_slice($masyvas, 0, 10);
$atsakymas = implode(' ', $masyvas);
print_r($atsakymas);

<?php
//1

$vardas = 'Regina';
$pavarde = 'Sadeckiene';
$gimimo_metai = '1900';
$einamieji_metai = '2022';

$amzius = $einamieji_metai - $gimimo_metai;

echo "As esu $vardas $pavarde. Man yra $amzius metai.";

//2
/*Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio.*/
echo '<br>';

$s1 = (rand (0, 4));
$s2 = (rand (0, 4));

if ($s1 > $s2) {
    echo (round ($s1 / $s2));
} else {
    echo (round ($s2 / $s1));
}
//3
/*Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę*/
echo '<br>';

$num1 = (rand (0, 25));
$num2 = (rand (0, 25));
$num3 = (rand (0, 25));

if  ($num1 > $num2 && $num1 < $num3 || $num1 < $num3 && $num1 > $num2) {
    echo $num1;
} else if ($num2 > $num1 && $num2 < $num3 || $num2 < $num1 && $num2 > $num3) {
    echo $num2;
} else if ($num3 > $num1 && $num3 < $num2 || $num3 > $num2 && $num3 > $num1) {
    echo $num3;
} else {
    echo 'reiksme lygi 0'
}

//4
/*Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų. */
echo '<br>';

$a = (rand (1, 10));
$b = (rand (1, 10));
$c = (rand (1, 10));

if ($a + $b > $c || $a + $c > $b || $b + $c > $a) {
    echo 'Trikampi sudaryti galima';
} else if ($a + $b <= $c || $a + $c <= $b || $b + $c <= $a){
    echo 'Trikampio sudaryti negalima';
}
//5
/*Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems 
reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti).*/
echo '<br>';

$a = (rand (0, 2));
$b = (rand (0, 2));
$c = (rand (0, 2));
$d = (rand (0, 2));

$c = 0;

if ($a == 2) {
    $c2++;
} else if ($b == 2) {
    $c2++;
} else if ($c == 2) {
    $c2++;
} else if ($d == 2) {
    $c2++;
}
$c1 = $a + $b + $c + $d - ($c2 * 2);
$c0 = 4 - $c1 - $c2;


//6
/*Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3>*/
echo '<br>';

$sk = (rand (1,6));

echo " < h $sk > $sk < / h $sk > ";

//7
/*Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni.*/
echo '<br>';

$rez1 = (rand (-10, 10));
$rez2 = (rand (-10, 10));
$rez3 = (rand (-10, 10));

if ($rez1 < 0 ) {
    echo ("<div style='color: green'> $rez1 </div>");
} else ($rez2 < 0 ) {
    echo ("<div style='color: green'> $rez2 </div>");
} else ($rez3 < 0 ) {
    echo ("<div style='color: green'> $rez3 </div>");
} else ($rez1 = 0 ) {
    echo ("<div style='color: red'> $rez1 </div>");
} else ($rez2 = 0 ) {
    echo ("<div style='color: red'> $rez2 </div>");
} else ($rez3 = 0 ) {
    echo ("<div style='color: red'> $rez3 </div>");
} else ($rez1 < 0 ) {
    echo ("<div style='color: blue'> $rez1 </div>");
} else ($rez2 < 0 ) {
    echo ("<div style='color: blue'> $rez2 </div>");
} else ($rez3 < 0 ) {
    echo ("<div style='color: blue'> $rez3 </div>");
}

//8 
/*Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000.*/
$zvakiu = rand(5, 3000);
$price = 1;
$discount03 = 0.03;
$discount04 = 0.04;
$invoice = 0;
$uzZvake = 0;
if($zvakiu * $price > 1000  && $zvakiu * $price <= 2000) {
    $invoice = ($zvakiu * $price) - ($zvakiu * $price * $discount03);
    $uzZvake = $invoice / $zvakiu;
} elseif ($zvakiu * $price > 2000) {
    $invoice = ($zvakiu * $price) - ($zvakiu * $price * $discount04);
    $uzZvake = $invoice / $zvakiu;
} else {
    $invoice = ($zvakiu * $price);
    $uzZvake = $invoice / $zvakiu;
}
echo "perkama $zvakiu zvakiu, uz zvake po $uzZvake";
//9
/*Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus.*/
//10
/*Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją rand(). Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės. Skaičių pridėkite prie jau sugeneruoto laiko. Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių.*/

//11 Papildomas.
/*Naudokite funkcija rand(). Sugeneruokite 6 kintamuosius su atsitiktinem reikšmėm nuo 1000 iki 9999. Atspausdinkite reikšmes viename strige, išrūšiuotas nuo didžiausios iki mažiausios, atskirtas tarpais. Naudoti ciklų ir masyvų NEGALIMA.*/

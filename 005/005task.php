<?php


//1
/*Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.*/
echo '<br>-------1-----<br>';

$array = [];

for ($i = 0; $i <= 29; $i++) {
    $array[$i] = (rand(5, 25));
}
print_r($array);

//2
/*Naudodamiesi 1 uždavinio masyvu:
a)Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;*/
echo '<br>-------2a-----<br>';
$caunt = 0;

for ($i = 0; $i <= 29; $i++) {
    if ($array[$i] > 10)
        $caunt++;
}
echo $caunt;

/*b)Raskite didžiausią masyvo reikšmę ir jos indeksą arba indeksus jeigu yra keli;*/
echo '<br>-------2b-----<br>';

$max = 0;

foreach ($array as $key => $value) {
    if ($max < $array[$key]) {
        $max = $array[$key];
    }
}
echo $max;


/*c)Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą;*/
echo '<br>-------2c-----<br>';

foreach ($array as $key => $value) {
    if ($array[$key] % 2 === 0) {
        $sum = $array[$key];
    }
}
echo $sum;

/*d)Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;*/
echo '<br>-------2d-----<br>';

$newarray = [];

foreach ($array as $key => $value) {
    $reiksme = $value - $key;
    array_push($newarray, $reiksme);
}
print_r($newarray);

/*e)Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;*/
echo '<br>-------2e-----<br>';


for ($i = count($array); $i <= 39; $i++) {
    $array[$i] = (rand(5, 25));
}
print_r($array);


/*f)Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;*/
echo '<br>-------2f-----<br>';

$porinis = [];
$neporinis = [];


foreach ($array as $key => $value) {
    if ($value % 2 === 0) {
        array_push($porinis, $value);   // pirmas i kur - masyvas, antras ka istumiam, kokia reiksme
    } else {
        array_push($neporinis, $value);
    }
}
print_r($porinis);
echo '<br>';
print_r($neporinis);

/*g)Pirminio masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;*/
echo '<br>-------2g-----<br>';

foreach ($porinis as $key => $value) {
    if ($value > 15) {
        $porinis[] = 0;
    }
}
print_r($porinis);

/*h)Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;*/
echo '<br>-------2h-----<br>';

foreach ($array as $key => $value) {
    $array[$i] = $value > 10;
}
print_r($value);

/*i)Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;*/
echo '<br>-------2i-----<br>';

// foreach ($array as $key => $value){
//     unset($porinis);
//     if ($key %2 ==0 ) {
//        $array[]
//     }
// }

//3
/*Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės.*/
echo '<br>-------3-----<br>';

$world = [];
$arrayABCD = ['A', 'B', 'C', 'D'];
$count = 0;

for ($i = 0; $i < 200; $i++) {
    $arrayRand = (rand(0, 3));
    array_push($world, $arrayABCD[$arrayRand]);
}
print_r($world);

echo '<br>-------3--A---<br>';
$countA = 0;

foreach ($world as $key => $value)
    if ($value == 'A') {
        $countA++;
    }
echo $countA;

echo '<br>-------3--B---<br>';
$countB = 0;

foreach ($world as $key => $value)
    if ($value == 'B') {
        $countB++;
    }
echo $countB;
$countC = 0;

echo '<br>-------3--C---<br>';
foreach ($world as $key => $value)
    if ($value == 'C') {
        $countC++;
    }
echo $countC;

echo '<br>-------3--D---<br>';

$countD = 0;

foreach ($world as $key => $value)
    if ($value == 'D') {
        $countD++;
    }
echo $countD;

//4
/*Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.*/
echo '<br>-------4-----<br>';

sort($world);

foreach ($world as $key => $value) {
    echo $world["$key"] = " $value ";
}

//5
/*Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. Sudėkite masyvus, sudėdami atitinkamas reikšmes. Paskaičiuokite kiek unikalių (po vieną, nesikartojančių) reikšmių ir kiek unikalių kombinacijų gavote.*/
echo '<br>-------5-----<br>';

$world1 = [];
$world2 = [];
$world3 = [];
$arrayABCD = ['A', 'B', 'C', 'D'];

for ($i = 0; $i < 200; $i++) {
    $arrayRand = (rand(0, 3));
    array_push($world1, $arrayABCD[$arrayRand]);
    array_push($world2, $arrayABCD[$arrayRand]);
    array_push($world3, $arrayABCD[$arrayRand]);
    $world[$i] = $world1[$key] . $world2[$key] . $world3[$key];
}
print_r($world[$i]);
// print_r($world2);
// print_r($world3);



// foreach ($world as $key => $value);
// $sum = ($world[$key]);

// print_r($sum);



//6
/*Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki 999. Masyvų ilgiai 100. Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis).*/
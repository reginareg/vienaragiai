<?php
echo '<pre>';

echo preg_replace_callback(
    '/b(\d+)/',   //d+ yra grazintinas skaicius, ko mes reikalaujame; b gali ir nebuti, prasome isspauzdint pries; 
    //'/b(\d+)/',   gaunam su rezultatus, viena grazina su b, kita be
    //'/(.)(\d+)/',  isveda tris rezultatus: visas ir paskui isskleidzia juos; kiekvienas apskliaudimas ieskojimas-atskiras atsakymas
    //'/\.(.*)\./',   simbolis . bet kiek kartu * ieskok 
    'ieskok',      //funkcijos pavadinimas
    'xvbcvkb' . rand(1000, 9999) . 'kuvygitucvuh'   //pvz 'xvbcvkb' . rand(1000, 9999) . 'kuvyg76456itucvuh' rastu random sk ir 76456
);

echo '<pre>';

function ieskok($m)
{
    print_r($m);   //paiesku rezultata spauzdina
    return '-' . $m[0] . '-';
}

//kitas pvz isrinkti tris paskutinius skaicius


$m = [5, 5, 6, 7, 8, 9, 3, 2];
$m3 = array_slice($m, -3);

print_r($m3);


//rand nuo 100 iki 999. Parašyti 3 funkcijas, sudėti jas į masyvą, tą masyvą praforyčinti ir kaip argumentą panaudoti sugeneruota rand. Funk daugina ir spausdina gautą argumentą 3, 5, 7 atitinkamai.

$sk = rand(100, 999);

$funkcijuMasyvas = [];

array_push(
    $funkcijuMasyvas,
    fn ($a) => $a * 3,
    fn ($a) => $a * 5,
    fn ($a) => $a * 7
);

foreach ($funkcijuMasyvas as $go) {
    echo $go($sk) . '<br>';
}

//vietoj funkcijos rasome rezultata

foreach ($funkcijuMasyvas as &$go) {
    $go = $go($sk);
}
print_r($funkcijuMasyvas);


//funkcijos generatorius

function gen_one_to_three()
{
    for ($i = 1; $i <= 3; $i++) {
        yield $i => 'AA';      //funkcijos returnas, bet nebutinai paskutinis, daugiareiksmis; nesaugo tik ismeta reiksme
    }
}
//pvz paima random 100 sk
// for ($i = 1; $i < 100; $i++) {
// yield $i => rand(1000, 9999);

foreach ($gen_one_to_three() as $key => $value) {
    echo "$key => $value <br>";
}





$transport = array('foot', 'bike', 'car', 'plane');

echo  '<br>';
$mode = current($transport);                       // current parodo i kur pointeris nukreiptas


echo  '<br>';
$mode = next($transport);                  //pointeris perstumtas ant sekancio
next($transport);
next($transport);
prev($transport);
end($transport);

echo end($transport);
echo reset($transport);  //grazina i pradzia


var_dump(current($transport));

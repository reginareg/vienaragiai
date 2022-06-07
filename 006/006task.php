<?php


//1
//Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą;
echo '<br>-------1-----<br>';

$valio = 'Valio!';

function fun($tekstas)
{
    echo '<h1>$tekstas</h1>';
}

fun($valio);

//2
/*Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas į h tagą, o antrasis tago numeris (1-6). Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją*/
echo '<br>-------2-----<br>';

function func($antras, $numeris)
{
    echo '<h1antras>$antras </h1$numeris>';
}

func('antras uzdavinys', 2);


//3
/*Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()). Visus skaitmenis stringe įdėkite į h1 tagą. Raides palikite. Jegu iš eilės eina keli skaitmenys, juos į tagą reikią dėti kartu (h1 atsidaro prieš pirmą ir užsidaro po paskutinio) Keitimui naudokite pirmo patobulintą (jeigu reikia) uždavinio funkciją ir preg_replace_callback();*/
echo '<br>-------3-----<br>';

echo '<pre>';
$stringas = md5(time());

echo $stringas;

preg_replace_callback('/[0-9]+/', 'h1', $stringas);
//pirmas argumentas ko ieskome; funkcija kuria mes kviesime; kurioje vietoje mes tai darome

echo '<br>';
print_r($stringas);

function h1($m)
{
    //print_r($m);
    //return '<h1 style="display:inline">' . $m[0] . '</h1>';
    return '<h1 style="display:inline">' . $m[0] . '</h1>';
}


//pvz

function funSum($a, $b)
{
    return $b($a);
}

function meska($c)
{
    return $c * 10;
}



echo '<br>';
echo funSum(5, fn ($x) => $x * 3);

echo '<br>';
echo funSum(5, fn ($x) => ++$x);

echo '<br>';
echo funSum(5, 'meska');

echo '<br>';

// function zuikis() {
//     return fn () => 123;
// }

//arba

$zuikis = fn () => fn ($a) => 123 + $a;


// echo '<br>';
// echo $zuikis()();

$m = [$zuikis];

echo '<br>';
echo $m[0]()(7);


//4
/*Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos (išskyrus vienetą ir patį save) Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių;*/
echo '<br>-------4-----<br>';


function ketvirtas($argumentas){
    $counter = 0;
    for($i = 2; $i < $argumentas; $i++){
        if($argumentas % $i == 0){
            $counter ++;
        }
    }return $counter;
}    
echo (   ketvirtas(444));

//5
/*Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 33 iki 77. Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją.*/

$sk = rand(33, 77);

$Masyvas = [];

function penktas($daliklis){
    for ($i = 33; $i < 100; $i++) {
        if ($i % 2 === 0)
}
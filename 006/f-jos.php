<?php


// $valio = 'Valio!';

// //funkcijos deklaracija

// function fun() {
//     global $valio, $kitas;  //nebenaudojama
//     echo '<h1>FUN!!!</h1>';
//     echo '<h1>valio</h1>';
//     $kitas = 'KITAS';
// }

// //funkcijos iskvietimas

// fun();
// fun();
// fun();

//parametras nera konkreti reiksme, tuscias kintamasis
//funkcijos deklaravime irasytas parametras    function fun($V)
//argumentas yra konkreti reiksme  kvietimas    fun($V)
//kvietimas paima $oblekta ir tada perduoda i funkcijos deklaravima


$valio = 'Valio!';       //perdavimas i iskvietima is iskvietimo i funkcija kur hhh
$kitas = 'KITAS';

function fun($hhh, $kkk $t)
{     // hhh paima valio is iskvietimo

    echo '<h1>FUN!!!</h1>';
    echo '<h1>$hhh</h1>';
    echo '<h1>$t $kkk</h1>';
    $atgal = 123;
    return $atgal;
}

$belenkas = fun($valio, $kitas);

echo $belenkas;   //grazint viena kintamaji galim, jeigu du idedam i masyva ir tada grazinam
                  //grazina $atgal





function daugiklis($a, $b) {     //galime suteikti reiksmes $a=10; echo duoti skaiciai stipresni jeigu duotos kelios reiksmes
    $rex = $a * $b;
    return $rez;
}              

echo daugiklis (7, 7);



//pvz
function daugiklis($a,...$m) {    
    $rex = $m[0] * $m[1] *$a;
    return $rez;
}    
$mas = [2, 5, 7];
echo daugiklis (...$mas);




function kelintas () {
    static $k = 0;          //paliktas ir kai funkcija baigia darba pradeda nuo pask reiksmes static, kai norime keliu reiksmiu
    $k++;
    return $k;
}

echo kelintas();
echo kelintas();
echo kelintas();


//anonimine funkcija

$bevardo = function(){
    echo 'As neturiu vardo';
};

$bevardo();
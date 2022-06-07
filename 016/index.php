<?php
use Meska\Lokys\Vaikas as V;     //kad rastytume new Vaikas ir uzskaitytu, nuima namespace; trumpinu iki V

// spl_autoload_register(function ($class) {
//     echo '<h3>Reikia 1: '.class.'</h3>';
// });
// spl_autoload_register(function ($class) {
//     echo '<h3>Reikia 2: '.$class.'</h3>';
//     require __DIR__ .'/'.$class.'.php';
// });


spl_autoload_register(function ($class) {    //vietoj require __DIR__, autoloadina viska ka jam reikia
    require __DIR__ .'/'.$class.'.php';
});



require __DIR__ .'/Stikline.php';
require __DIR__ .'/Cart.php';
require __DIR__ .'/Senelis.php';
require __DIR__ .'/Tevasas.php';
require __DIR__ .'/Vaikas.php';

// $v1 = new Meska\Lokys\Vaikas;
$v2 = new Vaikas;  //panaudojam use ir nuimam namespace
$v3 = new V;   //jeigu patrumpinam use 'as V'



$v->betvarke();
$v->tvarka();
$v->pasaka();
$v->posakis();


die;










$s1 = new Cart::create();
$s2 = new Cart::create();

$c3 = unserialize(serialize($c1));

echo '<br>';

echo json_encodee($c1);

echo '<br>';

print_r($c1);
print_r($c2);

die;

$s1 = new Stikline;
$s2 = new Stikline;
$s3 = new Stikline;


echo '<pre>';

print_r($s1);
print_r($s2);
print_r($s3);

echo '<br>';

echo Stikline::$gerimas;      //stikline yra klase, gerimas yra kintamasis 

Stikline::valio();  //statinio metodo paleidimas
$s2->kas();
$s3->kas();
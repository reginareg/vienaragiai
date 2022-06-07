<?php

echo '<pre>';
$namas = [55 => 'bebras','brolis' => 'Jonas', 'Simona']; //nedavus indekso ima sekanti laisva skaiciu


print_r($namas);

echo '<br>';

$namas[1]='barsukas';

echo $namas[1];

echo '<br>';

array_push($namas, 'Kazys');  // idedam dar viena nari i aukstesni auksta (ji sukuria)
$namas [] = 'Laima';  //atlieka ta pati, ideda nari

array_unshift($namas, 'pele'); //ideda nauja nari i zemiausia auksta (ji sukuria)

echo '<br>';

print_r($namas);

array_pop($namas);  // isimam is virsaus nari
array_shift($namas); //isima apatini nari

array_splice($namas, 1, 1); //ismetam --> nuo ko pradedam ismetyt ir antras sk nurodo kiek norime ismest, array prasideda nuo 0!

//indexas masyve skaicius arba stringas:
$namas['stogas'] = 'Karlsonas';

echo '<br>';

print_r($namas);



foreach($namas as $key => $value) {   //galime spauzdint be rakto tik reiksme ir atvirksciai
    echo '<br>';
    echo "$key => $value";
}

/*
$A = 5
$B = $A   sako B yra 5
$C = &$A  sako C yra $A
$A = 8    siuo momentu C bus 8 */ 


$A = 5;
echo '<br>';
$C = &$A;  //& yra kaip nuoroda-shortcut

$A = 8;

unset($C); //panaikina rysi

$C = 15;

echo $C, $A;


$colors = ['blue', 'red', 'green', 'yellow'];

foreach($colors as &$value){}        //$value yra array paskutinis (nes &) elementas yellow

// unset($value); panaikina rysi    //priskiria reiksmes paeiliui ir paemes priespask priskiria ji paskutinei reiksmei

foreach($colors as $value){          
echo '<br>';
echo $value;
}


//PVZ modifikuoti reiksmei:

foreach($colors as $key => $value){
    
    $colors[$key] = $colors[$key].'***';

}       
print_r($colors);


//antras varijantas:

foreach($colors as &$value){  // kintamasis value nukreiptas rodo interuojamosios reiksme

    $value = $value .'+++';

}       
$value = 'gaidys';
print_r($colors);




foreach(range(1, 5) as $v) {
    echo $v;
}

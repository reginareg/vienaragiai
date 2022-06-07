<?php


function recursive($num){
    echo 'IN' $num, '<br>';
    if($num < 3){
        //Kviečiame save. Padidiname numerį vienetu.
        recursive($num + 1);
    }
    echo 'OUT' . $num, '<br>';
}
$startNum = 1;
recursive($startNum);


//////pvz

$rm = [
    3,
    [6, 4, [
        8, 1, [
            7, 1
        ], 7
    ], 9]
];

print_r($rm);




function arraySum($masyvas) {
     $suma = 0;  
     foreach($masyvas as $value) {
       if(!is_array($value)) {
           $suma += $value;     //suma + = tos funkcijos rezultatas
        }
        else {
            $suma += arraySum($value);
        }
       }
       return $suma;
}
echo  arraySum($rm);

///pvz

$masyvas = [
    ['a','d'],
    ['v','e'],
    ['a','c'],
    ['s','r'],
];
usort($masyvas, function($a, $b){
    return $b[1] <=> $a[0];
});



usort($masyvas, fn($a, $b) => $b[1] <=> $a[1]);
   

print_r($masyvas);


//pvz

$result = 0;
$one = function()
{ var_dump($result); };

$two = function() use ($result)
{ var_dump($result); };

$three = function() use (&$result)
{ var_dump($result); };


$four = fn () => var_dump($result);

// $five = fn () => var_dump(&$result);  --- negalimas varijantas

$result++;

$one();    // NULL: $result nepasiekiamas
$two();    // int(0): $result nukopijuojamas
$three();    // int(1)
$four();


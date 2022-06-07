<?php

$petras = 'antanas';

$antanas = 'petras';

$birute = 'labas';

echo $$$antanas;

echo '<br>';
var_dump(!'karve');
var_dump(!!'');
var_dump((bool)'karve');

var_dump((int) '1');

echo '<br>';

$drambliai = -4;
if ($drambliai > 0) {
echo 'Yra dramblių';
}
elseif ($drambliai < 0) {
    echo 'Drambliu buvo ir jau nera';
}
else {
    echo 'Nera drambliu';
}

echo '<br>';

$drambliai = 3;
$raganosiai = 2;
$begemotai = 6;
if ($begemotai > $raganosiai && $begemotai > $drambliai) {
    echo 'Begemotų yra daugiausiai';
}

echo '<br>';
// paverciame priesingai salyga - nebemotu nera daugiausiai

/*  <===> reiskia keiciam i 
<   <===> >=
>   <===> <=
==  <===> !=
||  <===> &&
*/

$drambliai = 3;
$raganosiai = 2;
$begemotai = 1;
if ($begemotai <= $raganosiai || $begemotai <= $drambliai) {
    echo 'Begemotų nera daugiausiai';
}

echo '<br>';

$kas = (6 > 5) ? 'kate' : 'suo';

echo '<br>';
echo $kas;


echo '<br>';
$a = 0;

6 > 5 ? $a++ : $a--;
echo '<br>';
echo $a;

6 > 5 ? $a++ : (8 > 4 ? $a+=10 : $a--);
echo '<br>';
echo $a;

// $b = null;
$b = 5;
unset($b);

var_dump(isset($b));
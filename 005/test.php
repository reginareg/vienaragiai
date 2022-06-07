<?php

$ziurkes = 0;
$ratai = 0;
$saugiklis = 50;

do {
  if (!(--$saugiklis)) {
    echo 'saugiklis';
    break;
  };
  $ziurkes = (rand(3, 5));
  $ziurkes += $ziurkes;
  $ratai++;
} while ($ziurkes >= 20);
echo $ziurkes;

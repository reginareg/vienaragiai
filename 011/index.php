<?php


$cats = [
    'Pūkis',
    'Murkis',
    'Pilkis',
    'Rainius'
];
for ($i = 0; $i < 300; $i++) {
    $cats[] = rand(100000, 999999);
}

$out = json_encode($cats);


header('Content-Type: application/json; charset=utf-8');

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");

echo $out;

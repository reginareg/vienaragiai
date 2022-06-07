<?php
require __DIR__.'./Stikline.php';
$stikline = new Stikline(200);
$stikline->ipilti(1000);
$stikline1 = new Stikline(150);
$stikline1->ipilti($stikline->ispilti());
$stikline2 = new Stikline(100);
$stikline2->ipilti($stikline1->ispilti());
print_r($stikline2->getKiekis());
<?php
require __DIR__.'./Kibiras2.php';
$kibiras2 = new Kibiras2();
$kibiras2->prideti1Akmeni();
$kibiras2->pridetiAkmenu(3);
?>

<h1><?= $kibiras2->getAkmenuKiekis() ?> </h1>
<?php

$kibiras3=new Kibiras2();
$kibiras3->pridetiAkmenu(5);
$kibiras4 = new Kibiras2();
$kibiras4->prideti1Akmeni();
echo '<br>';
echo '<hr>';
echo $kibiras2->visiAkmenys();


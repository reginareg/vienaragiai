/*1. Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) į save. Viena nuoroda su failo vardu, o kita nuoroda su failo vardu ir GET duomenų perdavimo metodu perduodamu kintamuoju color=1. Padaryti taip, kad paspaudus ant nuorodos su perduodamu kintamuoju fonas nusidažytų raudonai, o paspaudus ant nuorodos be perduodamo kintamojo, vėl pasidarytų juodas.*/
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document 12</title>
</head>

<body <?php
        if (($_GET['color'] ?? 0) == 1) {
            print(' style="background-color: red"');
        } else {
            print('style="background: black"');
        }

        ?>>
    <h1>Labas as tavo puslapis</h1>
    <a href="http://localhost/vienaragiai/012/nd-webmechanika/">PAGE 1</a>
    <a href="http://localhost/vienaragiai/012/nd-webmechanika/?color=1">color=1</a>



</body>

</html>
/*2. Sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu kintamuoju nedarykite, o vietoj to padarykite, URL eilutėje ranka įvedus GET kintamąjį color su RGB spalvos kodu (pvz color=ff1234) puslapio fono spalva pasidarytų tokios spalvos.*/
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document 12</title>
</head>

<body <?php
        if ($_GET['color'] == 1) {
            print('style="background: black"');
        }
        $spalva = $_GET['color'];
        $style = "style='background-color: #{$spalva};'";
        print_r($style);




        ?>>
    <h1>Labas as tavo puslapis</h1>
    <a href="http://localhost/vienaragiai/012/nd-webmechanika/?color=1">PAGE 1</a>




</body>

</html>
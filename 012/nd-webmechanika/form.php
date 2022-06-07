//3. Perdarykite 2 uždavinį taip, kad spalvą būtų galimą įrašyti į laukelį ir ją išsiųsti mygtuku GET metodu formoje.
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>

<body <?php
        $spalva = $_GET['color'];
        $style = "style='background-color: #{$spalva};'";
        print_r($style);
        ?>>

    <form action="" method="get">

        Tavo tekstas: <input type="text" name="color">

        <button type="submit">GO</button>
    </form>

</body>

</html>
<?php
//Turn on error reporting -- this is critical
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program</title>
</head>
<body>
    <h1>Pair Program 1</h1>
    <?php
    $numbers = array(7,9,8,9,8,8,6);

    function printArr($numbers) {
        foreach ($numbers as $num) {
            echo "<p>$num </P>";
        }
    }
    printArr($numbers);
    ?>
</body>
</html>

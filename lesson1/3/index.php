<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>

<?php
$a = 5;
$b = '05';


var_dump($a == $b); //Происходит преобразование типов в Integer и убирается 0,
                              //так как число целое и происходит сравнение (a = 5, b = 5)

var_dump((int)'012345');  //тоже самое

var_dump((float)123.0 === (int)123.0); //сравниваются разные типы данных

var_dump((int)0 === (int)'hello, world'); // строка становится int и значение (0).
?>

<body>


</body>
</html>
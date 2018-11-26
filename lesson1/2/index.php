<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>

<?php
echo "Hello, World!"."<br>";

$name = "GeekBrains user";
echo "Hello, $name!"."<br>";

define('MY_CONST', 100);
echo MY_CONST."<br>";

$int10 = 42;
$int2 = 0b101010;
$int8 = 052;
$int16 = 0x2A;
echo "Десятеричная система $int10 <br>";
echo "Двоичная система $int2 <br>";
echo "Восьмеричная система $int8 <br>";
echo "Шестнадцатеричная система $int16 <br>";


$precise1 = 1.5;
$precise2 = 1.5e7;
$precise3 = 6E-8;
echo "$precise1 | $precise2 | $precise3"."<br>";

$a = 1;
echo "$a <br>";
echo '$a <br>';

$a = 'Hello,';
$b = 'world';
$c = $a . $b;
echo $c;

$a = 4;
$b = 5;
echo $a + $b . '<br>';    // сложение
echo $a * $b . '<br>';    // умножение
echo $a - $b . '<br>';    // вычитание
echo $a / $b . '<br>';  // деление
echo $a % $b . '<br>'; // остаток от деления
echo $a ** $b . '<br>'; // возведение в степень

$a = 4;
$b = 5;
$a += $b;
echo 'a = ' . $a;
$a = 0;
echo $a++."<br>";     // Постинкремент
echo ++$a."<br>";    // Преинкремент
echo $a­­."<br>";     // Постдекремент
echo --$a."<br>";    // Предекремент

$a = 4;
$b = 5;
var_dump($a == $b);  // Сравнение по значению
var_dump($a === $b); // Сравнение по значению и типу
var_dump($a > $b);    // Больше
var_dump($a < $b);    // Меньше
var_dump($a <> $b);  // Не равно
var_dump($a != $b);   // Не равно
var_dump($a !== $b); // Не равно без приведения типов
var_dump($a <= $b);  // Меньше или равно
var_dump($a >= $b);  // Больше или равно?>

?>

<body>


</body>
</html>
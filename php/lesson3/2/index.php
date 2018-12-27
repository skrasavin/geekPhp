<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>

<?

$value = 0;

do {
    if ($value == 0) {
        echo "$value - это ноль" . "<br>";
    }
    if ($value % 2 != 0 ) {
        echo "$value - это нечётное число" . "<br>";
    }
    if ($value % 2 == 0 && $value != 0) {
        echo "$value - это чётное число" . "<br>";
    }
    $value++;
} while ($value <= 10);
?>

<body>


</body>
</html>
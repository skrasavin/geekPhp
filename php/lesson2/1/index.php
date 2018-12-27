<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>

<?
$a = -2;
$b = -2;

if($a >= 0 && $b >= 0) {
    echo $a - $b;
}
if($a <= 0 && $b <= 0) {
    echo $a * $b;
}
if($a <= 0 && $b >= 0 || $a >= 0 && $b <= 0) {
    echo $a + $b;
}



?>

<body>


</body>
</html>
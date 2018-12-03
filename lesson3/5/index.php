<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<?

function replace($str) {

    $stroka = str_replace(' ', '_', $str);

    return $stroka;

}

echo replace("hello world");


?>

<body>


</body>
</html>
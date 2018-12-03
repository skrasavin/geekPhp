<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>6</title>
</head>
<body>
<?

function headList($item) {
    $str = "<ul>";
    $a = 0;

    while ($a < count($item)) {
        $str.="<li>$item[$a]</li>";


        $a++;
    }
    $str.="</ul>";

    return $str;
}

$items = ['Категории', 'Отзывы', 'Наши партнёры', 'Оптовикам', 'Акции'];

echo headList($items);

?>

</body>
</html>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>

<?
/*
Московская область:
Москва, Зеленоград, Клин
Ленинградская область:
Санкт-Петербург, Всеволожск, Павловск, Кронштадт
Рязанская область:
Михайлов, Ряжск, Рыбное
*/



$arr = ["Московская область" => ["Москва", "Зеленоград", "Клим"],
        "Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
        "Рязанская область" => ["Михайлов", "Ряжск", "Рыбное"]
        ];



foreach ($arr as $item => [$items, $items2, $items3]) {
    echo $item.":<br>";
    echo $items.", ".$items2.", ".$items3."<br><br>";
}

?>

<body>


</body>
</html>
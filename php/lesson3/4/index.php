<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<?

function transpilator($alph) {
    $rus = strtr($alph, array('а'=> 'a', 'б'=>'b', 'в'=>'v', 'г'=>'g', 'д'=>'d','е'=>'e', 'ж'=>'g', 'з'=>'z', 'и'=>'i',
        'к'=>'k', 'л'=>'l', 'м'=>'m', 'н'=>'n', 'о'=>'o', 'п'=>'p', 'р'=>'r', 'с'=>'s', 'т'=>'t',
        'у'=>'u', 'ф'=>'f', 'х'=>'x', 'ц'=>'c', 'ч'=>'ch', 'ш'=>'sh', 'э'=>'e', 'ю'=>'yu','я'=>'ya'));

    return $rus;
}
echo transpilator('привет мир')

?>

<body>


</body>
</html>
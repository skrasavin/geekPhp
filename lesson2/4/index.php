    <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>

<?

function mathOperation($a, $b, $operation)
{
    switch ($operation) {
        case '*':
            echo mult($a, $b);
            break;
        case '/':
            echo div($a, $b);
            break;
        case '+':
            echo sum($a, $b);
            break;
        case '-':
            echo minus($a, $b);
            break;
    }
}

mathOperation(3, 3, '+');


function mult($a, $b)
{
    return $a * $b;
}

function div($a, $b)
{
    return $a / $b;
}

function sum($a, $b)
{
    return $a + $b;
}

function minus($a, $b)
{
    return $a - $b;
}


?>

<body>


</body>
</html>
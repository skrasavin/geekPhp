<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>

<?
$a = 3;

function printValues($a) {
    while ($a != 15) {
        echo $a++;
    }
}

switch ($a) {
    case 0: printValues($a);
            break;
    case 1: printValues($a);
            break;
    case 2: printValues($a);
            break;
    case 3: printValues($a);
        break;
    case 4: printValues($a);
        break;
    case 5: printValues($a);
        break;
    case 6: printValues($a);
        break;
    case 7: printValues($a);
        break;
    case 8: printValues($a);
        break;
    case 9: printValues($a);
        break;
    case 10: printValues($a);
        break;
    case 11: printValues($a);
        break;
    case 12: printValues($a);
        break;
    case 13: printValues($a);
        break;
    case 14: printValues($a);
        break;
    case 15: printValues($a);
        break;
    default:
        echo 'Enter new value';
}

?>

<body>


</body>
</html>
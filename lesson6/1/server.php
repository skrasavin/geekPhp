<?
$sign = $_POST["sign"];
$f = $_POST["first"];
$s = $_POST["second"];
if($s == 0) {
    echo "Произощло деление на ноль."."<br>"."Попробуйте ещё раз";
}else {
switch ($sign) {
    case "+":echo $f+$s;
            break;
    case "-":echo $f-$s;
        break;
    case "*":echo $f*$s;
        break;
    case "/":echo $f/$s;
        break;
}
}
?>
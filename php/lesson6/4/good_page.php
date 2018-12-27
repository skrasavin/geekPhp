<?
include "server.php";
$x = $_GET["x"];
$x = (int)$x;
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>


<p class="el_1"><?=$name[$x]?></p>
<img class="el_2" src="<?=$photo[$x]?>" width="500px" height="350px" alt="">
<p class="el_3"><span class="el_4">Описание:</span><br><br>
    <?=$info[$x]?></p>
<p class="el_5"><?=$price[$x]?>р</p>
<input class="el_6" type="button" value="Купить">


</body>
</html>

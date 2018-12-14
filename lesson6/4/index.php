
<?
include "server.php";

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>photo page</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>

        window.onload = function () {
            console.log($("#good1").click({}));
        }
    </script>
</head>

<body>
    <div class="goods good_1">
        <a class="g_pos g_name" id="good1" href="good_page.php?x=0"><?=$name[0]?></a>
        <a href="good_page.php?x=0"><img class="g_pos photo" src="<?=$photo[0]?>" width="330px" height="300px" alt=""></a>
        <p class="g_pos g_desc"><span style="font-size: 20px; color: black; font-family: sans-serif;" >Описание:</span><br><br>
            <?=$smallinfo[0]?></p>
        <p class="g_pos g_count"><?=$price[0]?>р</p>
        <input class="g_pos g_buy" type="button" value="Купить">
    </div>
    <div class="goods good_2">
        <a class="g_pos g_name" href="good_page.php?x=1"><?=$name[1]?></a>
        <a href="good_page.php?x=1"><img class="g_pos photo" src="<?=$photo[1]?>" width="350px" height="300px" alt=""></a>
        <p class="g_pos g_desc"><span style="font-size: 20px; color: black; font-family: sans-serif;" >Описание:</span><br><br>
            <?=$smallinfo[1]?> </p>
        <p class="g_pos g_count"><?=$price[1]?>р</p>
        <input class="g_pos g_buy" type="button" value="Купить">
    </div>
    <div class="goods good_3">
        <a class="g_pos g_name" href="good_page.php?x=2"><?=$name[2]?></a>
        <a href="good_page.php?x=2"><img class="g_pos photo" src="<?=$photo[2]?>" width="350px" height="300px" alt=""></a>
        <p class="g_pos g_desc"><span style="font-size: 20px; color: black; font-family: sans-serif;" >Описание:</span><br><br>
            <?=$smallinfo[2]?></p>
        <p class="g_pos g_count"><?=$price[2]?>р</p>
        <input class="g_pos g_buy" type="button" value="Купить">
    </div>
    <div class="goods good_4">
        <a class="g_pos g_name" href="good_page.php?x=3"><?=$name[3]?></a>
    <a href="good_page.php?x=3"><img class="g_pos photo" src="<?=$photo[3]?>" width="350px" height="300px" alt=""></a>
    <p class="g_pos g_desc"><span style="font-size: 20px; color: black; font-family: sans-serif;" >Описание:</span><br><br>
        <?=$smallinfo[3]?></p>
    <p class="g_pos g_count"><?=$price[3]?>р</p>
    <input class="g_pos g_buy" type="button" value="Купить">
    </div>

</body>
</html>
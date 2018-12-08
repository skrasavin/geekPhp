<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Photo Gallery</title>
</head>
<body>

<?

$photos = scandir("photos/");

$count = 2;
$eoa = count($photos);


while ($count < $eoa) {
    $size = filesize("photos/$photos[$count]");
    echo $size;

    if (getExp("$photos[$count]") == "jpg" && $size < 200000) {
        getTag($photos[$count]);
    }

    $count++;
}


function getTag($position) {
    echo $tagA = "<a href=\"photos/$position\" target=\"_blank\"><img class=\"one\" src=\"photos/$position\" width=\"500\" height=\"300\"></a>";
}

function getExp($direction) {
    $info = new SplFileInfo("$direction");
    $exp = ($info->getExtension());
    return $exp;
}

?>


<form method="POST" action="server.php" enctype="multipart/form-data">
    <p>Загрузите файл</p>
    <input type="file" name="photo"><br><br>
    <input type="submit" value="Загрузить">

</form>

<style>

    body {
        text-align: center;
    }


</style>

</body>
</html>



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

echo $eoa;


while($count < $eoa){
    getTag($photos[$count]);
    $count++;
}

function getTag($position) {
    echo $tagA = "<a href=\"photos/$position\" target=\"_blank\"><img class=\"one\" src=\"photos/$position\" width=\"500\" height=\"300\"></a>";
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


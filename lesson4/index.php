
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Photo Gallery</title>
</head>
<body>

<a href="photos/1.jpg" target="_blank"><img class="one" src="photos/1.jpg" width="500" height="300"></a>
<a href="photos/2.jpg" target="_blank"><img class="one" src="photos/2.jpg" width="500" height="300"></a>
<a href="photos/3.jpg" target="_blank"><img class="one" src="photos/3.jpg" width="500" height="300"></a>
<a href="photos/4.jpg" target="_blank"><img class="one" src="photos/4.jpg" width="500" height="300"></a>
<a href="photos/.$_FILES[photo][name].jpg" target="_blank"><img class="one" src="photos/.$_FILES[photo][name].jpg" +
                                                                width="500" height="300"></a>:

<?

include "server.php";

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


<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gallery</title>
</head>
<body>



<?
include "server.php";

while ($data = mysqli_fetch_assoc($result)) {

    echo $tagA = "<a href=\"$data[addr]\" target=\"_blank\"><img class=\"one\" src=\"$data[addr]\"
             width=\"500\" height=\"300\"></a>";

}



echo "<style>body{text-align: center;}</style>";

?>


<form method="POST" action="server.php" enctype="multipart/form-data">
    <p>Загрузите файл</p>
    <input type="file" name="photo"><br><br>
    <input type="submit" value="Загрузить">

</form>
</body>
</html>


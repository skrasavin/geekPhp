
<?
include "server.php";

function hello() {
    echo "hello";
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Admin</title>
</head>

<body>

<h2>Личный кабинет</h2>
<a href="index.php"><button class="adminButton">Выход</button></a>
<button class="adminButton1" onclick="hello()"><p class="tbut">Добавить товар</p></button>
<div class="vis">
    <form action="server.php?tag=5" method="post" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Имя товара">
        <input type="text" name="smInfo" placeholder="Короткое описание">
        <input type="text" name="fullInfo" placeholder="Полное описание">
        <input type="text" name="price" placeholder="Стоимость">
        <input type="file" name="photo[]">
        <input type="submit">
    </form>
</div>
<button class="adminButton2"><p class="tbut">Изменить товар</p></button>
<div class="big">
    <?php
    for($c = 0; $c != count($name); $c++) {
        echo $id[$c];
        echo "<div class='goods'>";
        echo "<p class='nameGoods'>$name[$c]</p>";
        echo "<a class='photoGoods' target='_blank' href='good_page.php?x=$c'><img src='$photo[$c]' width='290px' height='200px' alt='test'></a>";
        echo "<form class='formBuy' method='post' action='admin.php?tag=6&id=asd'>";
        echo "<input type='submit' class='formButton' value='Удалить'>";
        echo "</form>";
        echo "<p class='priceCart1'>$price[$c]р</p>";
        echo "</div>";
    }
    ?>


</div>
</body>
</html>
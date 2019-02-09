<?
include_once "server.php";

$select = "SELECT * FROM `goodsForCart`";
$result = mysqli_query($connect, $select);

$name = [];
$price = [];
$addr = [];
$id = [];
$count = 0;

while ($data = mysqli_fetch_assoc($result)) {
    $id[$count] = $data["id"];
    $name[$count] = $data["name"];
    $price[$count] = $data["price"];
    $addr[$count] = $data["addr"];
    $count++;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Cart</title>
</head>
<body>
<h1>Корзина</h1>
<a href="users.php"><img class="logo" src="photos/logo.jpg" width="150" height="150"></a>

<div class="bigCart">
    <?php
    allGoodsCart($id, $name, $addr, $price);
    ?>
</div>

</body>
</html>
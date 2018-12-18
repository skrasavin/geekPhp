<?
include "config.php";

$select = "SELECT * FROM `goods`";
$result = mysqli_query($connect, $select);

$name = [];
$smallinfo = [];
$info = [];
$price = [];
$photo = [];
$count = 0;

while ($data = mysqli_fetch_assoc($result)) {
    $name[$count] = $data["name"];
    $smallinfo[$count] = $data["smallinfo"];
    $info[$count] = $data["info"];
    $price[$count] = $data["price"];
    $photo[$count] = $data["photo"];
    $count++;
}



?>

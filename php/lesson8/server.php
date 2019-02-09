<?
include_once "config.php";
include_once "redirect.php";

$select = "SELECT * FROM `goods`";
$result = mysqli_query($connect, $select);

//$id = [];
//$name = [];
//$smallinfo = [];
//$info = [];
//$price = [];
//$photo = [];
$count = 0;

while ($data = mysqli_fetch_assoc($result)) {
    $id = $data["id"];
    $name[$count] = $data["name"];
    $smallinfo[$count] = $data["smallinfo"];
    $info[$count] = $data["info"];
    $price[$count] = $data["price"];
    $photo[$count] = $data["photo"];
    $count++;
}


switch ($_GET["tag"]) {
    case 1:$addName = $_GET["name"];
            $addAddr = $_GET["addr"];
            $addPrice = $_GET["price"];
            $insert = "INSERT INTO `goodsForCart`(`name`, `addr`, `price`) VALUES ('$addName', '$addAddr', $addPrice)";
            mysqli_query($connect, $insert);
            redirectUsers();
            break;
    case 2:$deleteId = $_GET["id"];
            $delete = "DELETE FROM `goodsForCart` WHERE id=$deleteId";
            mysqli_query($connect, $delete);
            redirectCart();
            break;
    case 3: $login = $_POST["login"];
            $pass = $_POST["pass"];
            $accessAdmin = "1";
            $accessUsers = "0";
            $select = "SELECT * FROM `users`";
            $result = mysqli_query($connect, $select);
            while ($data = mysqli_fetch_assoc($result)) {
                if($login == $data["name"] && $pass == $data["pass"] && $accessAdmin == $data["access"]) {
                    redirectAdmin();
                    break;
                }else {
                    redirectIndex();
                }
                if ($login == $data["name"] && $pass == $data["pass"] && $accessUsers == $data["access"]) {
                    redirectUsers();
                    break;
                }
                else {
                    redirectIndex();
                }
            }
            break;
    case 4: $login = $_POST["login"];
            $pass = $_POST["pass"];
            $userAccess = 0;
            $insert = "INSERT INTO `users`(`name`, `pass`, `access`) VALUES ('$login', '$pass', '$userAccess')";
            mysqli_query($connect, $insert);
            redirectIndex();
            break;
    case 5:
            $name = $_POST["name"];
            $smInfo = $_POST["smInfo"];
            $fullInfo = $_POST["fullInfo"];
            $price = $_POST["price"];
            $photoFileName = $_FILES["photo"]["name"][0];
            $insert = "INSERT INTO `goods`(`name`, `smallinfo`, `info`, `price`, `photo`)
                        VALUES ('$name', '$smInfo', '$fullInfo', $price, 'photos/$photoFileName')";
            move_uploaded_file($_FILES["photo"]["tmp_name"][0], "photos/$photoFileName");
            mysqli_query($connect,$insert);
            redirectAdmin();
            break;
    case 6:
//        $deleteId = $_POST["id"];
//            $delete = "DELETE FROM `goods` WHERE id=$deleteId";
//            mysqli_query($connect, $delete);
//            redirectAdmin();
           echo $deleteId;
            break;

    default: break;
}
function allGoodsTest($id, $name, $photo, $price) {
    for($c = 0; $c != count($name); $c++) {
        echo "<div class='goods'>";
        echo "<p class='nameGoods'>$name[$c]</p>";
        echo "<a class='photoGoods' target='_blank' href='good_page.php?x=$c'><img src='$photo[$c]' width='290px' height='200px' alt='test'></a>";
        echo "<form class='formBuy' method='post' action='admin.php?tag=6&id=$id[$c]'>";
        echo "<input type='submit' class='formButton' value='Удалить'>";
        echo "</form>";
        echo "<p class='priceCart1'>$price[$c]р</p>";
        echo "</div>";
    }
}
function allGoodsUsers($name, $photo, $price) {
    for($c = 0; $c != count($name); $c++) {
        echo "<div class='goods'>";
        echo "<p class='nameGoods'>$name[$c]</p>";
        echo "<a class='photoGoods'target='_blank' href='good_page.php?x=$c'><img src='$photo[$c]' width='290px' height='200px' alt='test'></a>";
        echo "<form class='formBuy' method='post' action='users.php?tag=1&name=$name[$c]&addr=$photo[$c]&price=$price[$c]'>";
        echo "<input class='formButton' type='submit' value='Купить'>";
        echo "</form>";
        echo "<p class='priceCart'>$price[$c]р</p>";
        echo "</div>";
    }
}
function allGoodsIndex($name, $photo, $price) {
    for($c = 0; $c != count($name); $c++) {
        echo "<div class='goods'>";
        echo "<p class='nameGoods'>$name[$c]</p>";
        echo "<a class='photoGoods' target='_blank' href='good_page.php?x=$c'><img src='$photo[$c]' width='290px' height='200px' alt='test'></a>";
        echo "<p class='priceGoods'>$price[$c]р</p>";
        echo "</div>";
    }
}

function allGoodsAdmin($name, $photo, $price) {
    for($c = 0; $c != count($name); $c++) {
        echo "<div class='goods'>";
        echo "<p class='nameGoods'>$name[$c]</p>";
        echo "<a class='photoGoods' target='_blank' href='good_page.php?x=$c'><img src='$photo[$c]' width='290px' height='200px' alt='test'></a>";
        echo "<button class='cartButton'>Удалить";
        echo "<p class='priceCart1'>$price[$c]р</p>";
        echo "</div>";
    }
}

function allGoodsCart($id, $name, $photo, $price) {
    for($c = 0; $c != count($name); $c++) {
        echo "<div class='goods'>";
        echo "<p class='nameGoods'>$name[$c]</p>";
        echo "<img src='$photo[$c]' width='290px' height='200px' alt='test'>";
        echo "<form class='formBuy' method='post' action='cart.php?tag=2&id=$id[$c]'>";
        echo "<input class='formButton' type='submit' value='Удалить'>";
        echo "</form>";
        echo "<p class='priceCart'>$price[$c]р</p>";
        echo "</div>";
    }
}
?>

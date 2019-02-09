<?php

include "config.php";

//$select = "SELECT * FROM `goodsForCart`";
//$result = mysqli_query($connect, $select);

$insert = "INSERT INTO `goodsForCart`(`name`, `addr`, `price`) VALUES (\"Tolik\", \"Lelik\", 500)";

if($_GET["name"] == 4) {
    mysqli_query($connect, $insert);
    header("Location:".$_SERVER['PHP_SELF']);
}


//switch ($_GET["name"]) {
//    case 3: echo "hello test";
//            break;
//    case 4: mysqli_query($connect, $insert);
//            break;
//    default: break;
//}
<?

include "config.php";

$name = $_POST["name"];
$phone = $_POST["phone"];
$feedback = $_POST["feedback"];

//
//$sql = "select * from shop";
//$result = mysqli_query($connect, $sql);

//$insert = "INSERT INTO `shop`(`name`, `phone`, `feedback`) VALUES (\"$name\", $phone, \"$feedback\")";
//mysqli_query($connect, $insert);


echo "Отзыв успешно добавлен!"."<br><br>";
echo "Имя пользователя: ".$name."<br>";
echo "Телефон: ".$phone."<br>";
echo "Отзыв: ".$feedback."<br>";

?>


goods(id, name, info, price, photo)

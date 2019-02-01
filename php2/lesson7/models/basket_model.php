<?
$db = new PDO('mysql:host=localhost;port=3305;dbname=php2db;', 'root', '');

if ($_GET['key'] == 1) {
    $name = $_GET['name'];
    $addr = $_GET['addr'];
    $price = $_GET['price'];
    try {
        $query = "INSERT INTO `basket`(`name`, `addr`, `price`) VALUES ('$name', '$addr', $price)";
        $res = $db->exec($query);

    }catch(PDOException $e) {
        echo $e;
    }
    header('Location:../catalog.php');
}
if ($_GET['key'] == 2) {
    $id = $_GET['id'];

    try {
        $query = "DELETE FROM `basket` WHERE id=$id";
        $res = $db->exec($query);

    } catch (PDOException $e) {
        echo $e;
    }
    header('Location:../basket.php');
}
if($_GET['key'] == 6) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $order = '';
    $time = date('d.m.Y(Время G:i)');
    $sum = 0;
    $count = 1;
    $type = '';

    $query = "SELECT * FROM `basket`";
    $res = $db->query($query);
    foreach ($res as $val) {
        $type = gettype($type);
    }
    if($type !== 'string') {
        header('Location:../basket.php?mess=Корзина пустая');
        exit();
    }
    if($_POST['name'] != null && is_numeric($_POST['name']) && is_numeric($_POST['name'])) {
        header('Location:../basket.php?message=Введите имя!');
        exit();
    }
    if($_POST['phone'] != null && !is_numeric($_POST['phone']) && !is_numeric($_POST['phone'])) {
        header('Location:../basket.php?message=Введите номер телефона!');
        exit();
    }
    if($_POST['name'] == null || $_POST['phone'] == null) {
        header('Location:../basket.php?message=Заполните форму заказа!');
        exit();
    }
    if($_POST['name'] == null && $_POST['phone'] == null) {
        header('Location:../basket.php?message=Заполните форму заказа!');
        exit();
    }

    try {
        $query = "SELECT * FROM `basket`";
        $res = $db->query($query);
        foreach ($res as $val) {
            $sum += $val[3];
            $order .='Товар '.$count .') ' . $val[1].'<br>';
            $count++;
        }

        $query = "INSERT INTO `orders`(`date`, `name`, `phone`, `goods`, `sum`) VALUES
                                      ('$time', '$name', '$phone', '$order', $sum)";
        $db->exec($query);

        $query = "TRUNCATE TABLE `basket`";
        $db->exec($query);

    } catch (PDOException $e) {
        echo $e;
    }
    header('Location:../basket.php?mess=Заказ оформлен успешно');
}
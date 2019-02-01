<?

if ($_GET['key'] == 3) {
    $name = $_POST["name"];
    $desc = $_POST["desc"];
    $price = $_POST["price"];
    $photoFileName = $_FILES["photo"]["name"][0];
    move_uploaded_file($_FILES["photo"]["tmp_name"][0], "../photos/$photoFileName");

    try {
        $db = new PDO('mysql:host=localhost;port=3305;dbname=php2db;', 'root', '');
        $query = "INSERT INTO `catalog`(`name`, `addr`, `price`, `description`)
                  VALUES ('$name', '../photos/$photoFileName', $price, '$desc' )";
        $res = $db->exec($query);

    } catch (PDOException $e) {
        echo $e;
    }
    header('Location:../lk.php');
}
if ($_GET['key'] == 4) {
    $id = $_GET['id'];

    try {
        $db = new PDO('mysql:host=localhost;port=3305;dbname=php2db;', 'root', '');
        $query = "DELETE FROM `catalog` WHERE id=$id";
        $res = $db->exec($query);

    } catch (PDOException $e) {
        echo $e;
    }
    header('Location:../lk.php');
}
if($_GET['key'] == 5) {
    if($_POST["name"] == 'admin' && $_POST["pass"] == '111') {
    header('Location:../lk.php');
    }else {
        header('Location:../entrance.php');
    }
}
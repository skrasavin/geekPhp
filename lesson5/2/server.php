
<?
include "config.php";
$sql = "select * from tableone";
$result = mysqli_query($connect, $sql);
$path = "photos/".$_FILES["photo"]["name"];

if(move_uploaded_file($_FILES["photo"]["tmp_name"], $path)) {
    echo "Файл успешно загружен ";

    $val = "photos/".$_FILES["photo"]["name"];
    $fs = filesize("$val");
    $name = $_FILES["photo"]["name"];

    $insert = "INSERT INTO `tableone`(`addr`, `size`, `name`) VALUES (\"$val\", $fs, \"$name\")";
    mysqli_query($connect, $insert);
}
//else {
//    die("Ошибка загрузки файла");
//}




?>
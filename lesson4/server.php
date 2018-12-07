
<?

$path = "photos/".$_FILES["photo"]["name"];
echo $path;


if(move_uploaded_file($_FILES["photo"]["tmp_name"], $path)) {
    echo "Файл успешно загружен";
}
//else {
//    die("Ошибка загрузки файла");
//}

?>

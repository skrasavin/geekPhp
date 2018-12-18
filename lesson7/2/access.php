<?php

$connect = mysqli_connect("localhost", "root", "", "lesson7");
$res = mysqli_query($connect, "SELECT * from `users`");

while ($data = mysqli_fetch_assoc($res)) {
    if($_POST["name"] == $data["name"] && $_POST["pass"] == $data["pass"]) {
        echo "Привет пользователь!!!<br>";
        echo "Ваше имя - ".$_POST["name"];
    }
}
header("Location:index.php");
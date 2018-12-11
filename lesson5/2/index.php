
<?
include "config.php";

$sql = "select * from ftable";

$result = mysqli_query($connect, $sql);

$directory = scandir("photos");
$directory = array_slice($directory, 2);
//print_r($directory);
//echo $directory[0];

//$insert = "INSERT INTO `ftable`(`addr`, `size`, `name`) VALUES (\"photos/3.jpg\", 1100, \"3\")";
//mysqli_query($connect, $insert);
//echo $tagA = "<a href=\"$data[addr]\" target=\"_blank\"><img class=\"one\" src=\"$data[addr]\"
//        width=\"500\" height=\"300\"></a>";
//
    //$fs = filesize("$data[addr]");


echo $result->name;

while ($data = mysqli_fetch_assoc($result)) {
    
        if(in_array($data["name"],$directory)) {
        echo $tagA = "<a href=\"$data[addr]\" target=\"_blank\"><img class=\"one\" src=\"$data[addr]\"
             width=\"500\" height=\"300\"></a>";
        }


//    echo $data["addr"];


}

echo "<style>body{text-align: center;}</style>";

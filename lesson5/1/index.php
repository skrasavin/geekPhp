
<?
include "config.php";

$sql = "select * from address";

$result = mysqli_query($connect, $sql);

$directory = scandir('photos');
$directory = array_slice($directory, 2);


//$insert = "INSERT INTO `address`(`addr`) VALUES (\"3.jpg\")";
//mysqli_query($connect, $insert);

while ($data = mysqli_fetch_assoc($result)) {
    echo $tagA = "<a href=\"photos/$data[addr]\" target=\"_blank\"><img class=\"one\" src=\"photos/$data[addr]\" 
        width=\"500\" height=\"300\"></a>";

}

echo "<style>body{text-align: center;}</style>";


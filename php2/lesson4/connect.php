<?

$link = mysqli_connect("127.0.0.1", "root", "", "php2lesson4");
$select = "SELECT * FROM `photos` LIMIT 3";
$res = mysqli_query($link, $select);
$stack[] = Null;
$s = 1;

while ($data = mysqli_fetch_assoc($res)) {
    array_push($stack, 'photos/' . $data['addr']);
}
$stack = array_slice($stack, '1');

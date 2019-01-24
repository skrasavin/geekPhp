<?
include dirname(__DIR__).'../lib/config.php';
include dirname(__DIR__).'../lib/db.class.php';
function getPhotos() {
    try {
    $db = db::getInstance()->Connect(HOST, DB, USER, PASS);

    return $sth = db::getInstance()->Select('SELECT * FROM `photos`');

    }catch (PDOException $e) {
    echo $e;
    }
}

<?
include dirname(__DIR__).'../lib/config.php';
include dirname(__DIR__).'../lib/db.class.php';
function getGoods() {
    try {
    db::getInstance()->Connect(HOST, DB, USER, PASS);
    return $sth = db::getInstance()->Query('SELECT * FROM `catalog`');

    }catch (PDOException $e) {
    echo $e;
    }
}
function getBasket() {
    try {
        db::getInstance()->Connect(HOST, DB, USER, PASS);
        return $sth = db::getInstance()->Query('SELECT * FROM `basket`');

    } catch (PDOException $e) {
    }
}
function getOrders() {
    try {
        db::getInstance()->Connect(HOST, DB, USER, PASS);
        return $sth = db::getInstance()->Query('SELECT * FROM `orders`');

    } catch (PDOException $e) {
    }
}


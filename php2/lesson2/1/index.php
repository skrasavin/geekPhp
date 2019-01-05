<?

include_once "DigitalGoods.php";
include_once "PhysicalGoods.php";
include_once "WeightGoods.php";

$obj = new DigitalGoods("Books", 800, 2);
$obj->calc();

$obj = new PhysicalGoods("Pen", 30, 4);
$obj->calc();

$obj = new WeightGoods("Salt", 40, 5);
$obj->calc();
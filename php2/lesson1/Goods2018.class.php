<?

include "Goods.class.php";

class Goods2018 extends Goods {

    private $priceBTC;

    public function __construct($name,$quantity, $desc, $priceBTC){
        parent::__construct2($name, $quantity, $desc);
        $this->priceBTC = $priceBTC;
    }
    public function showGoods() {
        echo "Товар: ". $this->getName() . "<br> Стоимость в BTC: " . $this->priceBTC. "<br>";
        echo "Описание: " . $this->getDesc(). "<br> Количество: " . $this->getQuantity();
    }


}
$obj = new Goods2018("Old Wine", 1, "old wine", 0.2);
$obj->showGoods();
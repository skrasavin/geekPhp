<?
class Goods {
    private $name;
    private $price;
    private $quantity;
    private $desc;

    public function __construct($name, $price, $quantity, $desc){
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->desc = $desc;
    }
    public function __construct2($name, $quantity, $desc){
        $this->name = $name;
        $this->quantity = $quantity;
        $this->desc = $desc;
    }

    public function getName() {
        return $this->name;
    }
    public function getPrice() {
        return $this->price;
    }
    public function getQuantity() {
        return $this->quantity;
    }
    public function getDesc() {
        return $this->desc;
    }

    public function showGoods() {
       echo "Товар: ". $this->name . "<br> Стоимость: " . $this->price. "<br>";
       echo "Описание: " . $this->desc . "<br> Количество: " . $this->quantity;
    }

}

$obj = new Goods("Wine", 1000, 2, "new year wine");
//$obj->showGoods();
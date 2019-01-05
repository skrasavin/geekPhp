<?php
include_once "goods.php";

class PhysicalGoods extends Goods {
    private $name;
    private $cost;
    private $count;

    public function __construct($name,$cost,$count){
        $this->name = $name;
        $this->cost = $cost;
        $this->count = $count;
    }
    public function calc(){
        self::showParams();
        $cost = ($this->cost * $this->count) * 0.63;
        echo "Доход с продажи товара \"$this->name\" =  $cost р<hr>";
    }
    public function showParams(){
        $cost = $this->cost * $this->count;
        echo "Имя: $this->name <br> Стоимость: $this->cost р <br> Количество: $this->count шт<br> 
        Общая стомость: $cost <br><br>";
    }
}
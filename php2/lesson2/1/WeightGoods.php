<?php
include_once "goods.php";

class WeightGoods extends Goods {
    private $name;
    private $cost;
    private $weight;

    public function __construct($name,$cost,$weight){
        $this->name = $name;
        $this->cost = $cost;
        $this->weight = $weight;
    }
    public function calc(){
        self::showParams();
        $cost = $this->cost * $this->weight * 0.72;
        echo "Доход с продажи товара \"$this->name\" = $cost р <hr>";
    }
    public function showParams(){
        $cost = $this->cost * $this->weight;
        echo "Имя: $this->name <br> Стоимость: $this->cost р <br> Вес: $this->weight кг<br> 
        Общая стомость: $cost<br><br>";
    }
}
<?php
class Food{
     public $name;
     public $price;

     public function show_price() {
     echo $this->price;
     }
     
     public function __construct(string $name, int $price) {
        $this->name  = $name;
        $this->price = $price;
    }
}


class Animal{
     public $name;
     public $height;
     public $weight;

     public function show_height() {
     echo $this->height;
     }

     public function __construct(string $name, int $height, int $weight) {
        $this->name   = $name;
        $this->height = $height;
        $this->weight = $weight;
    }
}

$food = new Food("りんご", 150);
$animal = new Animal("ゾウ", 300, 5000);

print_r($food);
print_r($animal);

$food->show_price();
$animal->show_height();

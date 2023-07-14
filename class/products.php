<?php
    class Products{
        public $name;
        public $price;
        public $description;
        public $brand;
        public $image;
        public $animal;


        function __construct(string $image,string $name,string $animal,string $price,string $description,string $brand,){
            $this->name= $name;
            $this->price= $price;
            $this->description= $description;
            $this->brand= $brand;
            $this->image= $image;
            $this->animal= $animal;
        }

    }
?>
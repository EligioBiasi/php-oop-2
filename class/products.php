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


        /**
         * Get the value of name
         */ 
        public function getName()
        {
                return $this->name;
        }

        /**
         * Get the value of price
         */ 
        public function getPrice()
        {
                return $this->price;
        }

        /**
         * Get the value of description
         */ 
        public function getDescription()
        {
                return $this->description;
        }

        /**
         * Get the value of brand
         */ 
        public function getBrand()
        {
                return $this->brand;
        }

        /**
         * Get the value of image
         */ 
        public function getImage()
        {
                return $this->image;
        }

        /**
         * Get the value of animal
         */ 
        public function getAnimal()
        {
                return $this->animal;
        }
    }
?>
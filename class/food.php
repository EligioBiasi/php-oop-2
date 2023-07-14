<?php
    class Food extends Products{
        public $taste;
        public $dogAge;

        function __construct(string $image,string $name,string $animal,string $price,string $description,string $brand,string $taste,string $dogAge){
            parent::__construct( $image, $name, $animal, $price, $description, $brand);
            $this->taste= $taste;
            $this->dogAge= $dogAge;
        }

        /**
         * Get the value of taste
         */ 
        public function getTaste()
        {
                return $this->taste;
        }

        /**
         * Get the value of dogAge
         */ 
        public function getDogAge()
        {
                return $this->dogAge;
        }
    }
?>
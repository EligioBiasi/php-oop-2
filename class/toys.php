<?php
    class Toys extends Products{
        public $color;
        public $material;

        function __construct(string $image,string $name,string $animal,string $price,string $description,string $brand,string $color,string $material){
            parent::__construct( $image, $name, $animal, $price, $description, $brand); 
            $this->color= $color;
            $this->material= $material;
        }

        

        /**
         * Get the value of color
         */ 
        public function getColor()
        {
            return $this->color;
        }

        /**
         * Get the value of material
         */ 
        public function getMaterial()
        {
            return $this->material;
        }
    }
?>
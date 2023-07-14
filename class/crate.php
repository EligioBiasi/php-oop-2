<?php
    class Crates extends Products{
        public $size;
        public $material;

        function __construct(string $image,string $name,string $animal,string $price,string $description,string $brand,string $size,string $material){
            parent::__construct( $image, $name, $animal, $price, $description, $brand);
            $this->size= $size;
            $this->material= $material;
        }

        /**
         * Get the value of size
         */ 
        public function getSize()
        {
                return $this->size;
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
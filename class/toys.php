<?php
    class Toys extends Products{
        public $color;
        public $material;

        function __construct(string $color,string $material){
            $this->color= $color;
            $this->material= $material;
        }
    }
?>
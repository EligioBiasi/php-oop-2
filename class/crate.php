<?php
    class Crates extends Products{
        public $size;
        public $material;

        function __construct(string $size,string $material){
            $this->size= $size;
            $this->material= $material;
        }
    }
?>
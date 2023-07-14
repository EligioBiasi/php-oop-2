<?php
    class Food extends Products{
        public $taste;
        public $dogAge;

        function __construct(string $taste,string $dogAge){
            $this->taste= $taste;
            $this->dogAge= $dogAge;
        }
    }
?>
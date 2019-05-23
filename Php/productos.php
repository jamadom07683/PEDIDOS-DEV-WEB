<?php
    include_once("conexion.php");
    class Product extendes Model{
        public $code;
        public $product;
        public $description;
        public $price;

        public function __construct(){
            parent::__construct();
        }

    }

?>

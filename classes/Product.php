<?php

   class Product
   {
      public $name;
      public $id;
      public $price;
      public $discount;
      
      public function __construct($name, $id, $price)
      {
         $this->name = $name;
         $this->id = $id;
         $this->price = $price;
      }


// GETTERS
      public function GET_name()
      {
         return $this->name;
      }

      public function GET_price()
      {
         return $this->price;
      }

}





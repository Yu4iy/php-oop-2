<!--
Descrizione
Oggi pomeriggio provate ad immaginare alcune classi necessarie per
creare uno shop online; ad esempio, ci saranno sicuramente dei
prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l’ereditarietà dove necessario;
ad esempio ci potrebbero essere degli utenti premium che hanno
diritto a degli sconti esclusivi, oppure diverse tipologie di
prodotti.Eseguire poi degli output istanziando oggetti delle varie classi.
Di nuovo buon lavoro e a domani :php: -->


<?php
require_once __DIR__ . "/Product.php";

   class user extends product
   {
      protected $firstName;
      protected $lastName;
      protected $age;

      public function __construct($_firstName, $_lastName, $_age, $name, $id, $price)
      {
	      parent::__construct($name, $id, $price,);

         $this->firstName = $_firstName;
         $this->lastName = $_lastName;
         $this->age = $_age;
      }
      // GETTERS

      public function GET_firstName()
      {
         return $this->firstName;
      }
      public function GET_lastName()
      {
         return $this->lastName;
      }
      public function GET_age()
      {
         return $this->age;
      }
      public function GET_fullName()
      {
         return $this->SET_fullName();
      }
      public function GET_discount()
      {
         return $this->SET_discount();
      }
      // SETTERS

      private function SET_fullName(){
         return $this->firstName.' '.$this->lastName;
      }

      private function SET_discount()
      {
         if($this->GET_age() > 30 ){
            return $this->price - 1;
         }else{
            return $this->price;
         }
      }

   }
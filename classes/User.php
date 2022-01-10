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

   class User
   {
      public $firstName;
      public $lastName;
      public $status;
   
      public function __construct($firstName, $lastName, $status)
      {
         $this->firstName = $firstName;
         $this->lastName = $lastName;
         $this->status = $status;
      }

      public function GET_firstName()
      {
         return $this->firstName;
      }
      public function GET_lastName()
      {
         return $this->lastName;
      }


   }
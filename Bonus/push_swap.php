<?php

require_once "function.php";

class liste extends push_swap{

   protected $la = [];
   protected $lb = []; 
   public $a;
   public $count;

   public function __construct($a, $count) {

      $this->la = $a;
      $new_la = array_shift($this->la);
      $sorted = ($this->la);
      
      sort($sorted);
      //print_r($sorted);
      //echo $count;
      if ($count < 3 || $this->la === $sorted) {
         // echo "test";
         exit(0);
      } else {
         $this->la = $a;
         $new_la = array_shift($this->la);
         // print_r($this->la);
         //$this->lb = [22, 33, 44];
      }
   }
   
   public function algorithme()
   {
      if (!empty($this->la))
      $min = min($this->la);
      while(!empty($this->la)){
         for ($i=0; $i < count($this->la); $i++) { 
            if($this->la[0] == min($this->la)){
                  $this->pb($this->la, $this->lb);
            }
            else{
                 $this->ra($this->la);
            }
         }
      }

      while(!empty($this->lb)){
         $this->pa($this->la, $this->lb);
      }

      // AFFICHAGE DES PROCEDURES

      $real_string = implode(" ", $this->array_procedure);
      echo $real_string . PHP_EOL;
   }
}
  

$object = new liste($argv, $argc);
$object->algorithme();

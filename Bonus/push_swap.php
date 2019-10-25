<?php

require_once "function.php";

class liste extends push_swap{

   protected $la;
   protected $lb = [];

   public function list_Swap($a, $count) {
      
      $this->la = $a;
      //$this->lb = [22, 33, 44];
      
      $new_la = array_shift($this->la);
      
      //print_r($this->la);
      //$this->la = sa($this->la); 
      // $lb = sb($lb);
      //sc($this->la, $lb); //on utilise soit sa(), sb() ou sc(), ainsi on les mettre en parametre selon nos essaie.
      // pa($this->la, $lb);
      // pb($this->la, $lb);
      // ra($this->la);
      //rb($lb);
      //rr($this->la, $lb);
      //rra($this->la);
      //rrb($lb);
      //rrr($this->la, $lb);
   }
   
   public function algorithme()
   {
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
$object = new liste;
$object->list_swap($argv, $argc);
$object->algorithme();

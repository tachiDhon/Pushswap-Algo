<?php

class push_swap{

   protected $array_procedure = []; //array that helps arranging the functions in order?

   public function sa(&$la) {
      if(!empty($la)) {
         $tmp = $la[0];
         $la[0] = $la[1];
         $la[1] = $tmp;
         array_push($this->array_procedure, "sa");
         
         print_r($la);
      }  
   }
   
   public function sb(&$lb) {
      if(!empty($lb)) {
         $tmp = $lb[0];
         $lb[0] = $lb[1];
         $lb[1] = $tmp;
         array_push($this->array_procedure, "sb");
         
         print_r($lb);
      }
   }
   
   public function sc(&$la, &$lb) {
      if(isset($la[1], $lb[1])) {
         sa($la);
         sb($lb);
         array_push($this->array_procedure, "sc");
      }
   }
   
   public function pa(&$la, &$lb) {
      
      if(!empty($lb)){
         $first = array_shift($lb);
         array_unshift($la, $first);
         array_push($this->array_procedure, "pa");
         
         print_r($la);
      }
   }
   
   public function pb(&$la, &$lb) {
      
      if(!empty($la)) {
         $first = array_shift($la);
         array_unshift($lb, $first);
         array_push($this->array_procedure, "pb");
         print_r($la);
         print_r($lb);
      }
   }
   
   public function ra(&$la) {
      $second = array_shift($la);
      array_push($la, $second);
      array_push($this->array_procedure, "ra");
      
      print_r($la);  
   }
   
   public function rb($lb) {
      $third = array_shift($lb);
      array_push($lb, $third);
      array_push($this->array_procedure, "rb");
      
      print_r($lb);
      return $lb;
   }
   
   public function rr(&$la, &$lb) {
      ra($la);
      rb($lb);
      array_push($this->array_procedure, "rr");
   }
   
   public function rra(&$la) {
      $fifth = array_pop($la);
      array_unshift($la, $fifth);
      array_push($this->array_procedure, "rra");
      
      print_r($la);
   }
   
   public function rrb(&$lb) {
      $fifth = array_pop($lb);
      array_unshift($lb, $fifth);
      array_push($this->array_procedure, "rrb");
      
      print_r($lb);
   }
   
   public function rrr(&$la, &$lb) {
      rra($la);
      rrb($lb);
      array_push($this->array_procedure, "rrr");
   }
}
<?php

//require("push_swap.php");

function list_Swap($a, $count) {
   
   $la = $a;
   $lb = [22, 33, 44];
   // for($i=0; $i<$count; $i++) {
   //    array_push($la, $a[$i]);     
   // }
   $new_la = array_shift($la);
   print_r($la);
   // $la = sa($la); 
   // $lb = sb($lb);

   sc($la, $lb); //on utilise soit sa(), sb() ou sc(), ainsi on les mettre en parametre selon nos essaie.
}
list_swap($argv, $argc);

function sa(&$la) {

   if(!empty($la)) {
      $tmp = $la[0];
      $la[0] = $la[1];
      $la[1] = $tmp;
      
      print_r($la);
   }
  //return $la;
}

function sb(&$lb) {
   if(!empty($lb)) {
      $tmp = $lb[0];
      $lb[0] = $lb[1];
      $lb[1] = $tmp;

      print_r($lb);
   }
   //return $lb;
}

function sc(&$la, &$lb) {
   if(isset($la[1], $lb[1])) {
      sa($la);
      sb($lb);
   }
}

function pa($lb, $la) {

   if(isset($lb[]))
}
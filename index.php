<?php

require_once "push_swap.php";

function list_Swap($a, $count) {
   
   $la = $a;
   $lb = [22, 33, 44];

   $new_la = array_shift($la);
   //print_r($la);

   //$la = sa($la); 
   // $lb = sb($lb);

   //sc($la, $lb); //on utilise soit sa(), sb() ou sc(), ainsi on les mettre en parametre selon nos essaie.
   //pa($la, $lb);
   //pb($la, $lb);
   //ra($la);
   //rb($lb);
   rr($la, $lb);
   //rra($la);
   //rrb($lb);
   //rrr($la, $lb);
}
list_swap($argv, $argc);




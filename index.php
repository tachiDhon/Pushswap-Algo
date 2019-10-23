<?php

function list_Swap($a, $count) {

   global $la;
   
   $la = [];
   $lb = [];

   for($i=1; $i<$count; $i++) {
      array_push($la, $a[$i]);     
   }

}

function sa() {
   
   global $la;
   

}

list_Swap($argv, $argc);
print_r($la);
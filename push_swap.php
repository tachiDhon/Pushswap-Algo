<?php

function sa(&$la) {

   if(!empty($la)) {
      $tmp = $la[0];
      $la[0] = $la[1];
      $la[1] = $tmp;
      echo 'sa ';
      print_r($la);
   }
  //return $la;
}

function sb(&$lb) {
   if(!empty($lb)) {
      $tmp = $lb[0];
      $lb[0] = $lb[1];
      $lb[1] = $tmp;
      echo 'sb ';
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

function pa(&$la, &$lb) {

   if(!empty($lb)){
      $first = array_shift($lb);
      array_unshift($la, $first);
      print_r($la);
      //print_r($lb);
   }
}

function pb(&$la, &$lb) {

   if(!empty($la)) {
      $first = array_shift($la);
      array_unshift($lb, $first);
      print_r($lb);
      //print_r($la);
   }
}

function ra($la) {
   $second = array_shift($la);
   array_push($la, $second);
   print_r($la);
   
   return $la;
}

function rb($lb) {
   $third = array_shift($lb);
   array_push($lb, $third);
   print_r($lb);

   return $lb;
}

function rr(&$la, &$lb) {
   ra($la);
   rb($lb);
}

function rra(&$la) {
   $fifth = array_pop($la);
   array_unshift($la, $fifth);
   print_r($la);
}

function rrb(&$lb) {
   $fifth = array_pop($lb);
   array_unshift($lb, $fifth);
   print_r($lb);
}

function rrr(&$la, &$lb) {
   rra($la);
   rrb($lb);
}
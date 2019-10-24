<?php

function addToArray(&$array) {
   array_push($array, "Tashi");
}

$tab = ["Marjorie", "Phillip"];

addToArray($tab);

print_r($tab);
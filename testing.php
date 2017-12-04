<?php

$food=[];
$food[0]="fish";
$food[1]="beef";
$food[2]="ham";
$food[3]="corn";

$bestfood=3;

echo "<pre>",print_r($food),"</pre>";
foreach ($food as $f => $value) {

if($f==$bestfood){
$bestfood= $value;
echo  $bestfood  ,' at position ',$f ," is the best";






}
}
/*
switch ($bestfood) {
  case '$f':
echo "the match is",$value;
    break;

  default:
  echo "the match is not there";
    break;
}*/

 ?>

<?php

function rekursif($i){
  echo "*";
  $i++;
  if($i<6)
    rekursif($i);
}

function rekursif1($i){
  rekursif($i);
  echo "<br>";
  $i++;
  if($i < 6)
    rekursif1($i);
}  
rekursif1(1);
echo "/*======================================================================*/<br>";

function Piramida($x, $y){
  echo $x;
  $x++;
  if($x <= $y)
    Piramida($x, $y);
}

function RekPiramida($x, $y){
  Piramida(1, $x);
  echo "<br>";
  $x++;
  if($x <= $y)
    RekPiramida($x, $y);
}
RekPiramida(1, 5);
?>

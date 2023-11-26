<?php
/*
 

DESCRIPTION  




*/

function sponge_meme(string $sentence): string {
  $s = str_split($sentence);
  $res = '';
  foreach($s as $k=>$r){
    if($k%2==0){
      $res .= strtoupper($r);
    }
    else{
      $res .= strtolower($r);
    }
  }
  return $res;
}
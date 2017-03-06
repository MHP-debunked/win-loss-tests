<?php

/** 
  This test will tally the number of times a contestant should stay or switch in the Monty Hall Problem.
  
  It only looks at 1 piece of information, whether the contestant initially selected the car.  
  
  If Yes, that round is scored as Stay. Otherwise the round is scored as Switch.
  
*/

$stay = 0;
$switch = 0;
$rounds = 1000 * 100 * 3;
// score the rounds
for( $i = 0 ; $i < $rounds ; $i++ ){
  if( empty( mt_rand( 0 , $rounds ) % 3 ) ){ $stay++; }else{ $switch++; }
}
echo 'Stay = ' . $stay . '<br>Switch = ' . $switch;

<?php
  
  //GOAL: dato come target una stringa composta da una sequenza di 0 e 1. Partendo da una stringa composta solo da 0. calcolare il numero minimo di flip per arrivare al target. un flip cambia il valore delle cifre da 1 a 0 partendo da una qualsiasi flippa anche tutte le cifre a destra
  $length = random_int(3, 10);

  $target = [];
  $start = [];

  for ($i=0; $i < $length; $i++) { 

    $target[$i] = random_int(0,1);

    $start[$i] = 0;
  }

  echo 'Target: ' . implode($target) . '<br>';

  echo '<br>Start: ' . implode($start) . '<br>';

  $count = 0;

  for ($i=0; $i < count($target) ; $i++) { 
    
    if($target[$i] != $start[$i]){

      $start = flip($i, $start);

      $count++;

      echo '<br>Flip: ' . $count . '  ---  ' . implode($start) . '<br>';

    }

  }


  echo '<br>Total flips: ' . $count;




  function flip($index, $array){

    for ($i = $index; $i < count($array); $i++) { 
      
      if($array[$i] == 0){

        $array[$i] = 1;

      } else {
  
        $array[$i] = 0;
        
      }
    }

    return $array;

  }




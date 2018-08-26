<?php


  $numbers = array(1, 2, 3, 4, 5);
  $index = 1;

  $arrlength = count($numbers);
  for($i = 0; $i < $arrlength; $i++) {
    $index *= $numbers[$i];
  }
  for ($i=0; $i <$arrlength; $i++) {
      $numbers[$i] = $index / $numbers[$i];
    }

echo "<pre>";
  print_r($numbers);
echo "</pre>";

?>

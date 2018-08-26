<!DOCTYPE html>
<html>
<body>

<?php
$numbers = array(10, 15, 3, 7);
asort($numbers);
$k = 17;
$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
    for ($i=0; $i <$arrlength ; $i++) {

    if($numbers[$x] + $numbers[$i] === $k){
      return true;
    }
    echo "test";
  }
    return false;
}
?>

</body>
</html>

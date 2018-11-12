<?php
$trans = array(
    array(1, 2,9),
    array(3, 4,9),
    array(5, 6,9)
);

echo "<h2> Matrix </h2>";
for ($row = 0; $row < 3; $row++) {
  echo "<p><b>Row number $row</b></p>";
 
  for ($col = 0; $col < 3; $col++) {
    echo "<p>".$trans[$row][$col]."</p>";
  }

}

array_unshift($trans, null);
$trans = call_user_func_array('array_map', $trans);
//var_dump($trans);

echo "<h2> Transpose of Matrix </h2>";
for ($row = 0; $row < 3; $row++) {
  echo "<p><b>Row number $row</b></p>";
  
  for ($col = 0; $col < 3; $col++) {
    echo "<p>".$trans[$row][$col]."</p>";
  }
  
}
?>

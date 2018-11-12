<?php
$trans = array(
    array(1, 2,9),
    array(3, 4,9),
    array(5, 6,9)
);

array_unshift($trans, null);
$trans = call_user_func_array('array_map', $trans);
var_dump($trans);
?>

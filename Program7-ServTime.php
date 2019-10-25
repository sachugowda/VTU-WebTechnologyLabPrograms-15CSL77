<?php

date_default_timezone_set('Asia/Kolkata'); 

echo date('d/m/Y == h:i:s A');
$x = $_SERVER['PHP_SELF'];
$T = "10";
header("Refresh: $T; url=$x");  #updates after every 1second

?>

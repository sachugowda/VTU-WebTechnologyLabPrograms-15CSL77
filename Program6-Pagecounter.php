<?php 

   $fp = fopen("counterlog.txt", "r"); 
   $count = fread($fp, 10); 
   fclose($fp); 
   $count = $count + 1; 
   echo "<p>Page views:" . $count . "</p>"; 
   $fp = fopen("counterlog.txt", "w"); 
   fwrite($fp, $count); 
   fclose($fp); 

 ?> 
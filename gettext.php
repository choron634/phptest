<?php
  $file_name = "received_text.txt";
  $ret_array = file($file_name);
  for($i = 0; $i < count($ret_array); ++$i){
    echo($ret_array[$i]."<br />\n");
  }
 ?>

<?php
  $arr['奥迪']['A6'][0]='A6L';
  $arr['奥迪']['A6'][1]='A6X';
  $arr['奥迪']['A6'][2]='A6G';
  
  $arr['奥迪']['A8'][0]='A8L';
  $arr['奥迪']['A8'][1]='A8X';
  
  $arr['宝马']['A6'][0]='A6L';
  
  $jsonfile="./cartype.json";
  echo json_encode($arr);
  $fh = fopen($jsonfile, 'w')
      or die("Error opening output file");
  fwrite($fh, json_encode($arr));
  fclose($fh);
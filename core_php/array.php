<<?php
  $arr = [
    1 => '1nu',
    2 => 'Doi',
    3 => 'Trei'
  ];

  # echo $arr, PHP_EOL;

  $arr[] = 'Ceva';

  $arr2 = [
    4 => 'Patru',
    5 => '5inci'
    ];

  $arr3 = array_merge ($arr,$arr2);

  print_r($arr3);

 ?>

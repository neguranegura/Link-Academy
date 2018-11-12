<<?php
  $firstname = 'Ion';
  $firstnName = 'Vasile';
  echo "$firstname, $firstname, $FirstName".PHP_EOL;

  define(MYCONSTANT, 'SOMETHING');
  echo MYCONSTANT.PHP_EOL;
  echo "$firstname".PHP_EOL.MYCONSTANT.PHP_EOL;
  echo "MYCONSTANT".PHP_EOL;

  echo 'VERS PHP: '.PHP_VERSION.PHP_EOL;
  echo 'EXEC FOLOSIT: '.PHP_BINARY.PHP_EOL;
  echo 'VERS SIST. OPERARE: '.PHP_OS.PHP_EOL;
  echo 'LINIE CURENTA: '.__LINE__.PHP_EOL;
  echo 'FISIERUL CURENT: '.__FILE__.PHP_EOL;
  echo 'DIRECTORUL CURENT: '.__DIR__.PHP_EOL;


  $b = 3;
  $b = $b + 3;
  echo $b.PHP_EOL;


  $c = 5;
  print ($c).PHP_EOL;

  unset ($a);
  echo $a.PHP_EOL;

?>

<?php

  $rows = array_map('str_getcsv', file('people.csv'));
  $header = array_shift($rows);
  $csv = array();

  foreach ($rows as $row) {
    $csv[] = array_combine($header, $row);
  }

  print_r($csv);

?>

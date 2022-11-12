<?php
$dest = fopen(__DIR__ . '/large_file.txt', 'w');

// I'm generating some data here, but this will normally be your application.
for ($i = 0; $i < 10000; $i++)
{
  $string = $i . " green bottles sitting on a wall. \n";

  // Here's how to add the line to the end of the stream.
  fputs($dest, $string);
}

fclose($dest);
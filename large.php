<?php
ini_set('memory_limit', '100M');
ini_set('max_execution_time', 5);

$dest = fopen(__DIR__ . '/large_file.txt', 'w');
$temp = fopen('php://temp', 'rw');
$mem = fopen('php://memory', 'rw');


$start = microtime(true);

// I'm generating some data here, but this will normally be your application.
for ($i = 0; $i < 1000; $i++)
{
  $string = $i . " green bottles sitting on a wall. \n";

  // Here's how to add the line to the end of the stream.
  fputs($mem, $string);
}

$time_elapsed_secs = microtime(true) - $start;
echo 'Time elapsed: ' . $time_elapsed_secs . " seconds";
echo "<br>Memory Usage - not real: ".(memory_get_peak_usage(false)/1024/1024)." MiB\n";
echo "<br>Memory Usage - not real: ".(memory_get_peak_usage(true)/1024/1024)." MiB\n";

fclose($dest);
<?php
// Open the source and destination stream.
$source = fopen(__DIR__ . '/sample.txt', 'r');
$dest = fopen(__DIR__ . '/copied.txt', 'w');

// Wrap in an infinite loop, as before.
while(1)
{
  // Read the line from the file.
  $line = fgets($source);

  // Check that there's a data. If there isn't, break.
  if (!$line)
  {
    break;
  }

  // This is an alias of fwrite(), but it reads better.
  // The first argument is the destination stream, and the second is the data.
  fputs($dest, $line);
}

// Close the streams when you're done.
fclose($dest);
fclose($source);
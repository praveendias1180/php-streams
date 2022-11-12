<?php
// Here's how to open the temporary stream.
$temp = fopen('php://temp', 'rw');

// I'm generating some data here, but this will normally be your application.
for ($i = 0; $i < 1000; $i++)
{
  $string = $i . " green bottles sitting on a wall. \n";

  // Here's how to add the line to the end of the stream.
  fputs($temp, $string);
}

// Once you've finished collecting the data, you can rewind to the start to read it.
rewind($temp);

// This works in the same way as reading from the file system above.
while(1)
{
  $string = fgets($temp);

  if (!$string) {
    break;
  }

  echo $string;
}

fclose($temp);
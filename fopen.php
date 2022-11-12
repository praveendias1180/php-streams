<?php

$handle = fopen(__DIR__ . '/sample.txt', 'r');
while(1)
{
  $line = fgets($handle);
  if (!$line)
  {
    break;
  }
  echo $line;
}
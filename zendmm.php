<?php

ini_set('memory_limit', -1);

function heap(){
    return shell_exec(sprintf('grep "VmRSS:" /proc/%s/status', getmypid()));
}

echo heap();

$a = range(1, 1024*1024*10);

echo heap();

unset($a);

echo heap();
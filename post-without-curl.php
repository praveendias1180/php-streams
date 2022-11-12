<?php

if(function_exists('curl_init')){
    echo 'cURL exists'. PHP_EOL;
} else {
    echo 'cURL does not exit'. PHP_EOL;
}

$postdata = http_build_query(
    array(
        'name' => 'Praveen'
    )
);

$opts = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => $postdata
    )
);

$context = stream_context_create($opts);

$result = file_get_contents('http://localhost:5600/submit.php', false, $context);

var_dump($result);

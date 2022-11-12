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

$url = "http://localhost:5600/submit.php";

$opts = array('http' =>
    array(
        'method' => 'POST',
        'max_redirects' => '0',
        'ignore_errors' => '1',
        'content' => $postdata
    )
);

$context = stream_context_create($opts);
$stream = fopen($url, 'r', false, $context);

// header information as well as meta data
// about the stream
var_dump(stream_get_meta_data($stream));

// actual data at $url
var_dump(stream_get_contents($stream));
fclose($stream);
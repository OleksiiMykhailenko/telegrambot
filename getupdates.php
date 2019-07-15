<?php

//240291748

const TOKEN = '893150248:AAGYkXr5yE0InFfknFi02_mQAKYzD3fRfjs';

$url = 'https://api.telegram.org/bot' . TOKEN . '/getUpdates';

$lastupdate = 313186360;

$params = [
    'offset' => $lastupdate+1
];

$url = $url . '?' . http_build_query($params);

$response = json_decode(file_get_contents($url), JSON_OBJECT_AS_ARRAY);

if ($response['ok']) {
    foreach($response['result'] as $update) {
        echo $update['message']['text'];
        ?><br><?php
    }
}

var_dump($response);

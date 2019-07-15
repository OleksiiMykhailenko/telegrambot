<?php

const TOKEN = '893150248:AAGYkXr5yE0InFfknFi02_mQAKYzD3fRfjs';

$url = 'https://api.telegram.org/bot' . TOKEN . '/sendMessage';

$params = [
    'chat_id' => 240291748,
    'text' => 'I am Bot!'
];

$url = $url . '?' . http_build_query($params);

$response = json_decode(file_get_contents($url), JSON_OBJECT_AS_ARRAY);


var_dump($response);
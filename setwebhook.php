<?php

const TOKEN = '893150248:AAGYkXr5yE0InFfknFi02_mQAKYzD3fRfjs';

$method = 'setWebhook';

$url = 'https://api.telegram.org/bot' . TOKEN . '/' . $method;

$options = [
    'url' => 'https://url нашего webhook'
];

$respose = file_get_contents($url . '?' . http_build_query(($options)));

var_dump($response);
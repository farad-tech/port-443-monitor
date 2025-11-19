<?php
require 'vendor/autoload.php';

$interval = 1;
use FaradTech\Port443Monitor\ConnectionCounter;

$options = getopt("", ["interval::"]);

if (isset($options['interval'])) {
    $interval = (int)$options['interval'];
}

$connectionCounter = new ConnectionCounter();

for ($i = 0; $i <= 1000; $i++) {
    $count = $connectionCounter->count();
    $bars = str_repeat('|', intdiv($count, 10)) . str_repeat('-', $count % 10);

    echo sprintf("%d: %s\n", $count, $bars);
    sleep($interval);
}

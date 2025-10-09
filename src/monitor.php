#!/usr/bin/env php
<?php

$interval = 1;
$options = getopt("", ["interval::"]);

if (isset($options['interval'])) {
    $interval = (int)$options['interval'];
}

for ($i = 0; $i <= 1000; $i++) {
    $count = (int)trim(`netstat -plan | grep :443 | wc -l`);
    $bars = str_repeat('|', intdiv($count, 10)) . str_repeat('-', $count % 10);

    echo sprintf("%d: %s\n", $count, $bars);
    sleep($interval);
}

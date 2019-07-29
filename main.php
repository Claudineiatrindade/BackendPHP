<?php

require_once __DIR__ . '/vendor/autoload.php';

use Reweb\Job\Backend;

$exemplo = new Backend\Exemplo;

echo $exemplo->exemplo();

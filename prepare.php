<?php

require 'vendor/autoload.php';

use Carbon\Carbon;

printf("Now: %s", Carbon::now());

$start = $minute = strtotime('2011-02-01 00:00:00');
$end = strtotime('2011-02-01 23:59:59');
while($minute < $end)
{
     $minute = strtotime("+1 minute", $minute);
     echo date('H:i' , $minute);
     echo PHP_EOL;
}

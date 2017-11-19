<?php

//read input file

$file = file_get_contents('./storage/input.txt', FILE_USE_INCLUDE_PATH);

$allTimes = explode(PHP_EOL, $file);

foreach ($allTimes as $key => $timeToProcess) {
	die($timeToProcess);
}


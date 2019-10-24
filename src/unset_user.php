<?php

ksort($users);
$number = 0;
foreach ($users as $key => $user) {	
	$number++;
	$users[$key]['number'] = $number;	
}

foreach ($users as $key => $user) {
	if ($users[$key]['number'] == 1) {
		unset($users[$key]);
	}
}

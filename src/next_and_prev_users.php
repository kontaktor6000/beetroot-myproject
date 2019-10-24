<?php

ksort($users);
$cnt = count($users);
$arrayKeys = array_keys($users);

$nextUser = $users[$arrayKeys[1]];
$prevUser = $users[$arrayKeys[$cnt - 2]];
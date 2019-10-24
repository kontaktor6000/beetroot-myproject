<?php

$userMaxId = '0';
$userMinId = '0';
foreach ($users as $user) {
	if ($user['id'] > $userMaxId) {
		$userMaxId = $user['id'];
	}
}
$userMinId = $userMaxId;
foreach ($users as $user) {
	if ($user['id'] < $userMinId) {
		$userMinId = $user['id'];
	}
}
<?php
error_reporting(E_ALL);

$users = [];

$users['1'] = ["name" => "Andrey", "email" => "andrey@andrey.com"];
$users['3'] = ["name" => "Anton", "email" => "anton@anton.com"];
$users['23'] = ["name" => "Yakov", "email" => "yakov@yakov.com"];
$users['12'] = ["name" => "Boris", "email" => "boris@boris.com"];
$users['15'] = ["name" => "Tolyan", "email" => "tolyan@tolyan.com"];
$users['6'] = ["name" => "Prohor", "email" => "prohor@prohor.com"];
$users['8'] = ["name" => "Nikolya", "email" => "nikolya@nikolya.com"];


foreach ($users as $idArray => $user) {
    $users[$idArray]['id'] = $idArray;
}

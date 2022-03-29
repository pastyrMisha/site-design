<?php
session_start();

require_once __DIR__ . '/../App/autoload.php';

$ctrl = new \App\Controllers\Login();
$ctrl();
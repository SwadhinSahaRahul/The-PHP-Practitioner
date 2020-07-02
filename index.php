<?php

require 'functions.php';

$task = [
    "title" => "Finish Homework.",
    'due' => 'today',
    'assigned_to' => 'Rahul',
    'completed' => true
];

dd($task);
require 'index.view.php';

<?php

require 'functions.php';

class Task
{
    protected $completed = false;
    public $description;

    public function __construct($description)
    {
        $this->description = $description;
    }

    public function complete()
    {
        $this->completed = true;
    }

    public function isComplete()
    {
        return $this->completed;
    }
}

$tasks = [
    new Task("Go to store"),
    new Task("Do Homework"),
    new Task("Wash cloths"),
];

$tasks[0]->complete();
$tasks[2]->complete();

require 'index.view.php';

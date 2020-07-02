<?php

function dd($data)
{
    echo "<pre>";
    die(var_dump($data));
    echo "</pre>";
}

function connectToDb()
{
    try {
        return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', 1);
    } catch (Exception $exception) {
        die("Could not connect.");
    }
}

function fetchAllTasks($pdo)
{
    $stmt = $pdo->prepare("select * from tasks");

    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_CLASS, 'Task');
}
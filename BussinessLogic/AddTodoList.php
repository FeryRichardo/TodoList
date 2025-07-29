<?php

/**
 * Menambahkan Todo ke List
 */
require_once __DIR__ . '/../Model/TodoList.php';

function addTodoList (string $todo) {
    global $todoList;

    $number = count($todoList) + 1;

    $todoList[$number] = $todo;
}
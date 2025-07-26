<?php

/**
 * Menambahkan Todo ke List
 */
require_once '../Model/TodoList.php';

function addTodoList (string $todo) {
    global $todoList;

    $number = count($todoList) + 1;

    $todoList[$number] = $todo;
}
<?php

/**
 * Menampilkan Todo di List
 */

function showTodoList() {
    global $todoList;

    echo "TodoLIst:\n";

    foreach ($todoList as $number => $value) {
        echo "$number. $value\n";
    }
}
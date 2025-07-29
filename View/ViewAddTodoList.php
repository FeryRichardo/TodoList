<?php

require_once __DIR__ . '/../Model/TodoList.php';
require_once __DIR__ . '/../Helper/Input.php';
require_once __DIR__ . '/../BussinessLogic/AddTodoList.php';

function viewAddTodoList() {
    echo "Menambahkan Todo List\n";

    $todo = input("Todo (Tekan 3 untuk batal) ");

    if ($todo == 3) {
        echo "Batal Menambahkan Todo\n";
    } else {
        addTodoList($todo);
    }
}
<?php

/**
 * Menghapus Todo dari List
 */

function removeTodoList ($number) {
    global $todoList;

    if ($number > count($todoList)) {
        return false;
    }

    for ($i = $number; $i < count($todoList); $i++) {
        $todoList[$i] = $todoList[$i + 1];
    }

    unset($todoList[count($todoList)]);

    return true;
}
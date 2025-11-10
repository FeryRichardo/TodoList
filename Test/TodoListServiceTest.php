<?php

require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";

use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;

function testShowTodolist() {
    $todoListRepository = new TodolistRepositoryImpl();
    $todoListRepository->todoList[1] = "Belajar PHP";
    $todoListRepository->todoList[2] = "Belajar PHP OOP";
    $todoListRepository->todoList[3] = "Belajar PHP Database";

    $todoListService = new TodolistServiceImpl($todoListRepository);

    $todoListService->showTodoList();

}

testShowTodolist();
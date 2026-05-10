<?php

require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";
require_once __DIR__ . "/../View/TodolistView.php";
require_once __DIR__ . "/../Helper/InputHelper.php";

use \Entity\TodoList;
use \Repository\TodolistRepositoryImpl;
use \Service\TodolistServiceImpl;
use \View\TodolistView;


function testViewShowTodolist (): void {
    
    $todoListRepository = new TodolistRepositoryImpl();
    $todoListService = new TodolistServiceImpl($todoListRepository);
    $todoListView = new TodolistView($todoListService);

    $todoListService->addTodoList("Belajar PHP");
    $todoListService->addTodoList("Belajar PHP OOP");
    $todoListService->addTodoList("Belajar PHP Database");

    $todoListView->showTodoList();
}

function testViewAddTodoList(): void {
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListService = new TodolistServiceImpl($todoListRepository);
    $todoListView = new TodolistView($todoListService);

    $todoListService->addTodoList("Belajar PHP");
    $todoListService->addTodoList("Belajar PHP OOP");
    $todoListService->addTodoList("Belajar PHP Database");

    $todoListService->showTodoList();

    $todoListView->addTodoList();

    $todoListService->showTodoList();
}

testViewAddTodoList();
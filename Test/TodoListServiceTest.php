<?php

require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";

use Entity\TodoList;
use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;

function testShowTodolist() {
    $todoListRepository = new TodolistRepositoryImpl();
    $todoListRepository->todoList[1] = new TodoList("Belanar PHP");
    $todoListRepository->todoList[2] = new TodoList("Belajar PHP OOP");
    $todoListRepository->todoList[3] = new TodoList("Belajar PHP Database");

    $todoListService = new TodolistServiceImpl($todoListRepository);

    $todoListService->showTodoList();

}

function testAddtodoList(): void {
    $todoListRepository = new TodolistRepositoryImpl();

    $todoListService = new TodolistServiceImpl($todoListRepository);
    $todoListService->addTodoList('Belajar PHP');
    $todoListService->addTodoList('Belajar PHP OOP');
    $todoListService->addTodoList('Belajar PHP Database');

    $todoListService->showTodoList();
}

function testRemoveTodoList(): void {
    $todoListRepository = new TodolistRepositoryImpl();

    $todoListService = new TodolistServiceImpl($todoListRepository);
    $todoListService->addTodoList("Belajar PHP");
    $todoListService->addTodoList("Belajar PHP OOP");
    $todoListService->addTodoList("Belajar PHP Database");

    $todoListService->showTodoList();
    $todoListService->removeTodoList(1);

    echo "\n";
    
    echo "Daftar todo setelah dihapus:\n";
    $todoListService->showTodoList();
}

testRemoveTodoList();
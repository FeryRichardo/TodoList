<?php

require_once __DIR__ . "/Service/TodolistService.php";
require_once __DIR__ . "/View/TodolistView.php";
require_once __DIR__ . "/Helper/InputHelper.php";
require_once __DIR__ . "/Repository/TodolistRepositoryImpl.php";
require_once __DIR__ . "/Entity/TodoList.php";

use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use View\TodolistView;

echo "Aplikasi TodoList \n";

$todoListRepository = new TodolistRepositoryImpl();
$todoListService = new TodolistServiceImpl($todoListRepository);
$todoListView = new TodolistView($todoListService);

$todoListView->showTodoList();

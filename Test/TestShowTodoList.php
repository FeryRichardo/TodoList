<?php

require_once "../Model/TodoList.php";
require_once '../View/ViewShowTodoList.php';
require_once '../BussinessLogic/AddTodoList.php';

addTodoList("Belajar PHP Dasar");
addTodoList("Belajar OOP PHP");
addTodoList("Belajar Studi Kasus PHP");



viewShowTodoList();
<?php

require_once "../BussinessLogic/AddTodoList.php";
require_once "../Model/TodoList.php";


addTodoList("Belajar PHP Dasar");
addTodoList("Belajar OOP PHP");
addTodoList("Belajar Studi Kasus PHP");

var_dump($todoList);
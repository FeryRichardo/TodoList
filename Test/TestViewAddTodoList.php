<?php

require_once '../View/ViewAddTodoList.php';
require_once '../BussinessLogic/ShowTodoList.php';
require_once '../BussinessLogic/AddTodoList.php';

addTodoList("Belajar PHP Dasar");
addTodoList("Belajar OOP PHP");
addTodoList("Belajar Studi Kasus PHP");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();
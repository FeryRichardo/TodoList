<?php

namespace Service {
    
    interface TodolistService {

        function showTodoList(): void;

        function addTodoList(string $todo): void;

        function removeTodoList(int $number): void;
    }
}
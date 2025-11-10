<?php

namespace Repository
{

    use Entity\TodoList;

    interface TodolistRepository 
    {
        function save(TodoList $todoList): void;

        function remove(int $number): bool;

        function findAll(): array;
    }

    class TodolistRepositoryImpl implements TodolistRepository {

        public array $todoList = [];
        function save(TodoList $todoList): void {
            $number = sizeof($this->todoList) + 1;
            $this->todoList[$number] = $todoList;
        }

        function remove(int $number): bool {
        
        }

        function findAll(): array {
            return $this->todoList;
        }

    }
}
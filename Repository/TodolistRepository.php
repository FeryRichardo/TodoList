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

        private array $todoList = [];
        function save(TodoList $todoList): void {
        }

        function remove(int $number): bool {
        
        }

        function findAll(): array {
            return $this->todoList;
        }

    }
}
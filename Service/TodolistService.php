<?php

namespace Service {
    
    use Entity\TodoList;
    use Repository\TodolistRepository;
    interface TodolistService {

        function showTodoList(): void;
        function addTodoList(string $todo): void;

        function removeTodoList(int $number): void;
    }

    class TodolistServiceImpl implements TodolistService {

        private TodolistRepository $todolistRepository;

        public function __construct(TodolistRepository $todolistRepository) {
            $this->todolistRepository = $todolistRepository;
        }
        function showTodoList(): void {

            echo "TODOLIST:\n";
            $todoList = $this->todolistRepository->findAll();
            foreach($todoList as $number => $value) {
                echo "$number. $value\n";
            }
        }

        function addTodoList(string $todo): void {
            $todoList = new TodoList($todo);
            $this->todolistRepository->save($todoList);
            echo "Sukses menambahkan todo: $todo\n";
        }

        function removeTodoList(int $number): void {}
    }
}
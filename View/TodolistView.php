<?php

namespace View {

    use Service\TodolistService;
    use Helper\InputHelper;

    class TodolistView {

        private TodolistService $todolistService;

        public function __construct(TodolistService $todolistService) {
            $this->todolistService = $todolistService;
        }
        function showTodoList(): void {
            while (true) {
                $this->todolistService->showTodoList();

                echo "Menu: \n";
                echo "1. Tambah\n";
                echo "2. Hapus\n";
                echo "3. Keluar\n";

                $pilihan = InputHelper::input("Pilih");

                if ($pilihan == "1") {
                    $this->addTodoList();
                } else if ($pilihan == "2") {
                    $this->removeTodoList();
                } else if ($pilihan == "3") {
                    break;
                } else {
                    echo "Pilihan tidak dimengerti\n";
                }
            }
        }

        function addTodoList(): void {

        }

        function removeTodoList(): void {
            
        }
    }
    
}
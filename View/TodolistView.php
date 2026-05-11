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
                echo "x. Keluar\n";

                $pilihan = InputHelper::input("Pilih");

                if ($pilihan == "1") {
                    $this->addTodoList();
                } else if ($pilihan == "2") {
                    $this->removeTodoList();
                } else if ($pilihan == "x") {
                    break;
                } else {
                    echo "Pilihan tidak dimengerti\n";
                }
            }
        }

        function addTodoList(): void {
            echo "Menambah Todo\n";

            $todo = InputHelper::input("Todo (Tekan 'x' untuk batal) ");

            if ($todo == "x") {
                echo "Batal menambah todo\n";
            } else {
                $this->todolistService->addTodoList($todo);
            }
        }

        function removeTodoList(): void {
            echo "Menghapus Todo\n";

            $pilihan = InputHelper::input("Nomor todo yang akan dihapus (Tekan 'x' untuk batal) ");

            if ($pilihan == "x") {
                echo "Batal menghapus todo\n";
                echo "Terima kasih\n";
            } else {
                $success = $this->todolistService->removeTodoList($pilihan);

                if (!$success) {
                    echo "Gagal menghapus todo, nomor tidak ditemukan\n";
                }
            }
        }
    }
    
}
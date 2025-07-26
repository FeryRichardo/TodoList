<?php

require_once "../BussinessLogic/ShowTodoList.php";
require_once "../View/ViewAddTodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../Model/TodoList.php";
require_once "../Helper/Input.php";

function viewShowTodoList () {
    while (true) {
        showTodoList();

        echo "Menu \n";
        echo "1. Tambah Todo \n";
        echo "2. Hapus Todo \n";
        echo "3. Keluar \n";

        $choice = input("Pilih");

        if ($choice == "1") {
            viewAddTodoList();
        } else if ($choice == "2") {
            viewRemoveTodoList();
        } else if ($choice == "3") {
            break;
        } else {
            echo "Pilihan Tidak Dimengerti \n";
        }
    }

    echo "Sampai Jumpa Lagi\n";
}
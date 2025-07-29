<?php

require_once __DIR__ . '/../Helper/Input.php';
require_once __DIR__ . '/../BussinessLogic/RemoveTodoList.php';

function viewRemoveTodoList () {
    echo "=== Hapus Todo List ===\n";

    $pilihan = input("Pilih Todo List yang ingin dihapus (Tekan x untuk batal) ");

    if ($pilihan == "x") {
        echo "Batal Menghapus Todo List\n";
    } else {
        $success = removeTodoList($pilihan);

        if ($success) {
            echo "Sukses menghapus Todo List ke-$pilihan\n";
        } else {
            echo "Gagal menghapus Todo List ke-$pilihan\n";
        }
    }
}
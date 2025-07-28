<?php

require_once '../Helper/Input.php';
require_once '../BussinessLogic/RemoveTodoList.php';

function viewRemoveTodoList () {
    echo "=== Hapus Todo List ===\n";

    $pilihan = input("Pilih Todo List yang ingin dihapus (Tekan 3 untuk batal) ");

    if ($pilihan == 3) {
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
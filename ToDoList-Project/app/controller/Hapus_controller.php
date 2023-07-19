<?php

class Hapus_controller extends Controller
{
    public function __construct()
    {
        if (isset($_GET['hapus'])) {
            parent::model('Todo_list_model')->hapus($_GET['id']);
            session_start();
            Flasher::setFlash('berhasil', 'dihapuskan', 'success');
            header('Location: index.php');
            exit;
        }
        header('Location: index.php');
        exit;
    }
}

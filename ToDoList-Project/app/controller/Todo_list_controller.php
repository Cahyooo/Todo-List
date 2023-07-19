<?php

class Todo_list_controller extends Controller
{
    public function __construct()
    {
        session_start();
        if (isset($_SESSION['cek']) == false) {
            header('Location: login.php');
            exit;
        }

        if (isset($_POST['tambah'])) {
            parent::model('Todo_list_model')->tambah();
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: index.php');
            exit;
        }

        $data = $this->ambilData();
        $this->view('templates/header', $data);
        $this->view('main/index', $data);
        $this->view('templates/footer', $data);
    }

    public function ambilData()
    {
        $ambil = new Database;
        return $ambil->query('SELECT * FROM todolist');
    }
}

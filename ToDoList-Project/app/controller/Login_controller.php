<?php

class Login_controller extends Controller
{
    public function __construct()
    {
        $error = '';
        if (isset($_POST['login'])) {
            $error = $this->loginUser();
            $error = '<p style="color: red; font-style: italic; margin:0; position:absolute; transform:translate(7vw,-1.5vw); text-align:center;font-size:0.9vw;transform: translate(6vw,-1.5vw);">Username / Password Salah!</p>';
        }

        session_start();
        if (isset($_SESSION['cek']) == true) {
            header('Location: index.php');
            exit;
        }

        $data = [
            'error' => $error
        ];
        $this->view('templates/header', $data);
        $this->view('Login/index', $data);
        $this->view('templates/footer', $data);
    }

    public function loginUser()
    {
        $model = parent::model('Login_model')->login();
        return $model;
    }
}

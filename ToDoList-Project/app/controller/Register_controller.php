<?php

class Register_controller extends Controller
{
    public function __construct()
    {
        $error = '';
        if (isset($_POST['register'])) {
            $error = $this->registerUser();
        }        

        $data = [
            'error' => $error
        ];

        $this->view('templates/header', $data);
        $this->view('Register/index', $data);
        $this->view('templates/footer', $data);
        
    }

    public function registerUser() {
        $model = parent::model('Register_model')->register();
        
        if ($model['userSama'] == 'errorUser' && is_null($model['passwordBeda'])) {
            // Jika Username sudah ada di data
            return '<p style="color: red; font-style: italic; margin:0; position:absolute; transform:translate(7vw,-1.5vw); text-align:center;font-size:0.9vw;transform: translate(3.5vw,-1.5vw);">Username sudah dipakai! Silahkan gunakan username lain!</p>';
        } else if (is_null($model['userSama']) && $model['passwordBeda'] == 'errorPassword') {
            // jika Password dan Confirm Password berbeda
            return '<p style="color: red; font-style: italic; margin:0; position:absolute; transform:translate(7vw,-1.5vw); text-align:center;font-size:0.9vw;transform: translate(6vw,-1.5vw);">Password dan Confirm password harus sama!</p>';
        } else if (is_null($model['userSama']) && is_null($model['passwordBeda'])) {
            // Jika Berhasil
            echo '<script>
            alert("Registrasi Berhasil!");
            window.location.href = "' . BASEURL . '/login.php";
            </script>';
            exit;
        }
    }
}

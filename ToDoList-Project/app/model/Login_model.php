<?php

class Login_model
{
    public function login()
    {
        $data = new Database();
        $conn = $data->getConn();

        $user = $_POST['user'];
        $password = mysqli_real_escape_string($conn, $_POST["password"]);

        $query = "SELECT * FROM user WHERE nama = '$user'";
        $cek = mysqli_query($conn, "$query");

        if (mysqli_num_rows($cek) === 1) {
            $row = mysqli_fetch_assoc($cek);
            if (password_verify($password, $row['password'])) {
                session_start();
                $_SESSION["cek"] = true;
                header('Location: ' . BASEURL .'/index.php');
                exit;
            }
        }

        $error = true;
    }
}

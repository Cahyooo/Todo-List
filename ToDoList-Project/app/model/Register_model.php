<?php

class Register_model
{
    public function register()
    {
        $data = new Database();
        $conn = $data->getConn();

        $user = htmlspecialchars($_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST["password"]);
        $confirmPass =  mysqli_real_escape_string($conn, $_POST["confirm"]);

        $query = "SELECT * FROM user WHERE nama = '$user'";
        $cekUser = mysqli_query($conn, $query);

        if (mysqli_fetch_assoc($cekUser)) {
            $result = [
                'userSama' => 'errorUser',
                'passwordBeda' => null
            ];
        } else if ($password != $confirmPass) {
            $result = [
                'userSama' => null,
                'passwordBeda' => 'errorPassword'
            ];
        } else {
            $password = password_hash($password, PASSWORD_DEFAULT);
            mysqli_query($conn, "INSERT INTO user VALUES('','$user','$password')");
            $result = [
                'userSama' => null,
                'passwordBeda' => null
            ];
        }

        return $result;
    }
}

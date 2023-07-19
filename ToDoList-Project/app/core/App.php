<?php

class App
{
    public function __construct()
    {
        $page = ['index.php', 'login.php', 'register.php', 'hapus.php'];
        $filename = basename($_SERVER['PHP_SELF']);
        if ($filename == $page[0]) {
            require_once '../app/controller/Todo_list_controller.php';
            new Todo_list_controller;
        } else if ($filename == $page[1]) {
            require_once '../app/controller/Login_controller.php';
            new Login_controller;
        } else if ($filename == $page[2]) {
            require_once '../app/controller/Register_controller.php';
            new Register_controller;
        } else if ($filename == $page[3]) {
            require_once '../app/controller/Hapus_controller.php';
            new Hapus_controller;
        }
    }
}

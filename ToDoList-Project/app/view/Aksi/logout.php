<?php

define('BASEURL', 'http://localhost/Latihan-PHP/ToDoList-Project/public');
session_start();
session_destroy();
header('Location: ' . BASEURL . '/login.php');
exit;

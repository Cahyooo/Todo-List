<?php

$data = new Database;
$conn = $data->getConn();

$id = $_POST['id'];
$judul = htmlspecialchars($_POST['judul']);
$deskripsi = htmlspecialchars($_POST['deskripsi']);
$deadline = htmlspecialchars($_POST['deadline']);
$prioritas = htmlspecialchars($_POST['prioritas']);
$status = $_POST['btnradio'];
$date = date("Y-m-d");

$query = "UPDATE todolist SET
                    judul = '$judul',
                    deskripsi = '$deskripsi',
                    deadline = '$deadline',
                    prioritas = '$prioritas',
                    status = '$status',
                    `waktu-diupdate` = '$date'
                    WHERE id = '$id'
                    ";
mysqli_query($conn, $query);
// var_dump($_POST);
session_start();
Flasher::setFlash('berhasil', 'digantikan', 'success');
header('Location: ' . BASEURL . '/index.php');
exit;

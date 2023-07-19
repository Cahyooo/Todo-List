<?php

require_once '../../innit.php';

if (isset($_POST['id'])) {
    $data = new Database;
    $conn = $data->getConn();

    $id = $_POST['id'];
    $query = "SELECT * FROM todolist WHERE id = '$id'";
    $info = mysqli_query($conn,$query);
    $info = mysqli_fetch_assoc($info);

    $data = array(
        'id' => $id,
        'judul' => $info['judul'],
        'deskripsi' => $info['deskripsi'],
        'deadline' => $info['deadline'],
        'prioritas' => $info['prioritas'],
        'status' => $info['status']
    );

    $jsonData = json_encode($data);

    // header('Content-Type: application/json');
    echo $jsonData;
}

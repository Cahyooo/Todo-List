<?php 

class Todo_list_model{
    public function tambah(){
        $data = new Database;
        $conn = $data->getConn();

        $judul = htmlspecialchars($_POST['judul']);
        $deskripsi = htmlspecialchars($_POST['deskripsi']);
        $deadline = htmlspecialchars($_POST['deadline']);
        $prioritas = htmlspecialchars($_POST['prioritas']);
        $date = date("Y/m/d");

        $query = "INSERT INTO todolist VALUES ('','$judul','$deskripsi','$deadline','$prioritas','Not Completed','$date','$date')";
        mysqli_query($conn, $query);

        return $result = true;
    }
    public function hapus($id){
        $data = new Database;
        $conn = $data->getConn();

        $query = "DELETE FROM todolist WHERE id = $id";
        mysqli_query($conn, $query);
    }
}
<?php

class Database
{
    protected $conn;
    public $dbname;

    public function __construct()
    {
        $servername = DB_HOST;
        $username = DB_USER;
        $password = DB_PASS;
        $this->dbname = DB_NAME;

        $this->conn = mysqli_connect($servername, $username, $password, $this->dbname);

        if (!$this->conn) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }
    }

    public function query($query)
    {
        $sql = $query;
        $result = $this->conn->query($sql);

        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function getConn()
    {
        return $this->conn;
    }
}

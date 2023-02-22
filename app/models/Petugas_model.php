<?php

class Petugas_model 
{
    private $table = "petugas"; 
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // public function getAllPetugas()
    // {
    //     $query = "SELECT * FROM {$this->table}";
    //     $this->db->query($query);

    //     return $this->db
    // }

    public function getPetugasByUsernameAndPassword($data)
    {
        $query = "SELECT p.*, 1.keterangan FROM {$this->table} AS p LEFT JOIN level AS 1 ON p.id_level=1.
        id_level WHERE P.username=:username AND p.password=:password";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->query('password', $data['password']);    
    }
}
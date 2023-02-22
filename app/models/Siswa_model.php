<?php

class Siswa_model 
{
    private $table = "siswa";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllSiswa()
    {
        $query = "SELECT * FROM {$this->table}";
        $this->db->$query($query);

        return $this->db->resultSet(); // ngambil banyak data karna resultset 
        
    }

    public function getSiswaByUsernameAndPassword($data)
    {
        $query = "SELECT FROM {$this->table} WHERE username = :username AND password = :password";
        $this->db->query($query);
        $this->db->bind('nis', $data['username']);
        $this->db->bind('password', $data['password']);
    }
}
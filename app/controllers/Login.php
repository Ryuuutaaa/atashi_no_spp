<?php

class Login extends Controller 
{
    public function index()
    {
        Middleware::onlyNotLogedIn();

        $data["title"] = "Halaman Login";

      $this->view("templates/header");
      $this->view("auth/index");
      $this->view("templates/header");

    }

    public function sign()
    {
        Middleware::onlyNotLogedIn(); // ngambil class Middleware dan ngambil static funtcion

        $data = [
            'username' => $_POST['username'],
            'passaword' => $_POST['pasasword'],
        ];
    }
}
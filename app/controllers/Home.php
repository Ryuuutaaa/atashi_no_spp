<?php

class Home extends Controller 
{
    public function index()
    {
        
        $data["judul"] = "Halaman login";

        $this->view("templates/header", $data);
        $this->view("auth/index", $data);
        $this->view("templates/footer");
    }
}


<?php

// Class Base Controller
// Untuk load models dan views

class MyController
{
    protected $auth;
    protected $session;

    public function __construct()
    {
        // Instansiasi kelas Authentikasi dan MySession
        $this->auth = new Authentikasi();
        $this->session = new MySession();
    }

    // Load model
    public function model($model)
    {
        // Require model file
        require_once '../app/models/' . $model . '.php';

        // Instansiasi model
        return new $model();
    }

    // Load view
    public function view($view, $data = [])
    {
        // Cek file view
        $view_file = '../app/views/' . $view . '.php';

        // Jika file view ada, load view
        if (file_exists($view_file)) {
            require_once $view_file;
        } else {
            // Jika file view tidak ada, tampilkan error
            die("File view " . $view . " tidak ada!");
        }
    }
}

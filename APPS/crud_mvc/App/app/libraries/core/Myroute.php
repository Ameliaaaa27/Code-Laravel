<?php
// App Route Class - membuat URL & memuat controller inti
// URL FORMAT - /controller/method/params

class MyRoute {
    protected $currentController = 'Dashboard';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct() {
        $url = $this->get_url();

        // Cari di controllers untuk nilai pertama
        if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
            // Jika ada, tetapkan sebagai controller
            $this->currentController = ucwords($url[0]);
            unset($url[0]);
        }

        require_once '../app/controllers/' . $this->currentController . '.php';

        // Instansiasi class controller
        $this->currentController = new $this->currentController;

        // Cek kedua bagian URL
        if (isset($url[1])) {
            // Cek apakah method ada di controller
            if (method_exists($this->currentController, $url[1])) {
                $this->currentMethod = $url[1];
                unset($url[1]);
            }
        }

        // Dapatkan params
        $this->params = $url ? array_values($url) : [];

        // Panggil callback dengan array params
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    public function get_url() {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}

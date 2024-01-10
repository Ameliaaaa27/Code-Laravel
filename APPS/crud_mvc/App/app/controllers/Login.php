<?php
class Login extends MyController {
    public function __construct() {
        parent::__construct();
        if ($this->auth->isLoggedIn()) {
            header('Location: ' . APP_URL . '/dashboard');
            exit;
        }
    }

    public function index() {
        $data['title'] = 'Login';
        $this->view('login/index', $data);
    }

    public function proses() {
        if (isset($_POST['login'])) {
            $login = $this->auth->login($_POST['username'], $_POST['password']);
            if ($login) {
                header('Location: ' . APP_URL . '/dashboard');
            } else {
                $this->session->set('error_login_message', 'Cek kembali username dan password!');
                header('Location: ' . APP_URL . '/dashboard');
            }
        }
    }
}

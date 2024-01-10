<?php
class Dashboard extends MyController {
    public function __construct() {
        parent::__construct();
        if (!$this->auth->isLoggedIn()) {
            header('Location: ' . APP_URL . '/login');
            exit;
        }
    }

    public function index() {
        $data['title'] = 'Dashboard';
        $this->view('dashboard/index', $data);
    }
}

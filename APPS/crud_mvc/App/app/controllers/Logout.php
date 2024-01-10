<?php
class Logout extends MyController {
    public function __construct() {
        parent::__construct();
        if ($this->auth->isLoggedIn()) {
            $this->auth->logout();
        } else {
            header('Location: index.php');
            exit;
        }
    }
}

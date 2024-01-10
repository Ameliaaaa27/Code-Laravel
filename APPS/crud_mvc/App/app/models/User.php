<?php
class User extends MyDatabase {

    public function __construct() {
        parent::__construct();
    }

    public function find($username) {
        $sql = "SELECT * FROM users WHERE username = '{$username}'";
        $data = $this->getRecordSet($sql);
        return $data;
    }

    public function detail($id) {
        $sql = "SELECT * FROM users WHERE id = '{$id}'";
        $data = $this->getOne($sql);
        return $data;
    }

    public function get_all() {
        $sql = "SELECT * FROM users";
        $data = $this->getRecordSet($sql);
        return $data;
    }

    public function cari($katakunci) {
        $sql = "SELECT * FROM users WHERE name LIKE '%{$katakunci}%'";
        $data = $this->getRecordSet($sql);
        return $data;
    }

    public function delete($id) {
        $sql = "DELETE FROM users WHERE id = '{$id}'";
        $query = $this->eksekusiQuery($sql);
        return $query;
    }

    public function tambah($post, $created_by) {
        $sql = "INSERT INTO users(username, password, name, created_at, created_by) VALUES (
            '{$post['username']}',
            '{$post['password']}',
            '{$post['name']}',
            NOW(),
            '{$created_by}'
        )";
        $query = $this->eksekusiQuery($sql);
        return $query;
    }

    public function update($post, $updated_by) {
        if (trim($post['password']) == '') {
            $sql = "UPDATE users SET 
                name = '{$post['name']}',
                updated_at = NOW(),
                updated_by = '{$updated_by}'
                WHERE id = '{$post['id']}'";
        } else {
            $sql = "UPDATE users SET
                password = '{$post['password']}',
                name = '{$post['name']}',
                updated_at = NOW(),
                updated_by = '{$updated_by}'
                WHERE id = '{$post['id']}'";
        }
        $query = $this->eksekusiQuery($sql);
        return $query;
    }
}
?>
